<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/01/19
 * Time: 13:34
 */

namespace App\Controller;
use App\Entity\AlmiUsuariosJuego;
use App\Entity\FosUser;
use App\Entity\AlmiSkinsJuego;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class WWWController extends AbstractController
{
    //private static $USER_ID = null;
    /**
     * @Route("/index", name="index")
     */
    public function indexLogin(){
        $parametros = array('error' => null);
        return $this->render('Tienda/index.html.twig', $parametros);
    }

    /**
     * @Route("/", name="home")
     */
    public function index(){
        $parametros = array('title' => 'Tienda Figther', 'error' => null);
        return $this-> render('index.html.twig', $parametros);
    }

    /**
     * @Route("/ver", name="ver")
     */
    public function ver(){

        $entity_manager = $this->getDoctrine()->getManager();
        $parametros = array('skins' => null);

        if(isset($_GET['id'])){

            $info_skin = $entity_manager->getRepository(AlmiSkinsJuego::class)->find($_POST['id']);

            $parametros = array('skins' => array('nombreSkin' => $info_skin->getNombreskin(), 'precio' => $info_skin->getPrecio(), 'ruta' => $info_skin->getRuta()));

        }else{

            $info_skin = $entity_manager->getRepository(AlmiSkinsJuego::class)->findAll();

            foreach ($info_skin as $dato){

                $skins[] = array('id'=>$dato->getId(), 'nombreSkin' => $dato->getNombreSkin(), 'precio' => $dato->getPrecio(), 'ruta' => $dato->getRuta());

            }

            $parametros['skins'] = $skins;

        }

        return $this->render('Tienda/Skins/skins.html.twig', $parametros);

    }

    /**
     * @Route("/comprar", name="comprar")
     */
    public function comprar(){

    }

    /**
     * @Route("/config/{id}", name="config")
     */
    public function config($id){

        $entity_manager = $this->getDoctrine()->getManager();

        $user_query = $entity_manager->getRepository(FosUser::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();

        $info_user = $entityManager->getRepository(AlmiUsuariosJuego::class)->findAll();

        foreach ($info_user as $dato){

            if($dato->getFosuser() == $user_query->getId()){

                $parametros = array('user' => array('username' => $dato->getUsuario(), 'email' => $user_query->getEmail(), 'password'=>$dato->getPasswd()));
                break;
            }

        }

        return $this->render('Tienda/Usuario/usuario.html.twig', $parametros);

    }

    /**
     * @Route("/login", name="login")
     */
    public function login(){

        $parametros = array('error' => null);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if ($_POST['username'] != "" && $_POST['password'] != ""){

                $factory_encoder = new BCryptPasswordEncoder(12);
                $entity_manager = $this->getDoctrine()->getManager();
                $user_query = $entity_manager->getRepository(FosUser::class)->findAll();

                foreach ($user_query as $item){

                    if ($_POST['username'] == $item->getUsername()){

                        $plain_password = $factory_encoder->isPasswordValid($item->getPassword(),$_POST['password'],$item->getSalt());

                        if($plain_password == $item->getPassword()){

                            $parametros = array('userID' => $item->getId(), 'error' => null);
                            //$this->USER_ID = $item->getId();

                            $session = new Session();
                            $session->set('userID', $item->getId());
                            $session->set('nombre', $item->getUsername());
                            $session->set('email', $item->getEmail());
                            $session->start();

                            return $this->render('Tienda/index.html.twig', $parametros);

                        }

                    }else{

                        $parametros = array('error' => 'USUARIO O CONTRASEÑA SON INCORRECTOS');
                    }

                }

            }else{

                $parametros = array('error' => 'PORFAVOR RELLENE LOS CAMPOS');

                return $this->render('index.html.twig', $parametros);
            }

        }else{

            $parametros = array('error' => 'METODO NO VALIDO');

            return $this->render('index.html.twig', $parametros);
        }

        return $this->render('index.html.twig', $parametros);

    }

}