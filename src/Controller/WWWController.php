<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/01/19
 * Time: 13:34
 */

namespace App\Controller;
use App\Entity\AlmiSkinsJuegoAlmiUsuariosJuegoRel;
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

        $entity_manager = $this->getDoctrine()->getManager();

        $skins_juego = $entity_manager->getRepository(AlmiSkinsJuego::class)->findAll();

        foreach ($skins_juego as $skin_juego){

            $skins[] = array('id' => $skin_juego->getId(), 'nombreSkin' => $skin_juego->getNombreskin(), 'precio' => $skin_juego->getPrecio(), 'ruta' => $skin_juego->getRuta());

        }

        $parametros['skins'] = $skins;
        $parametros['error'] = null;
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
        $parametros = null;

        $comprados = $entity_manager->getRepository(AlmiSkinsJuegoAlmiUsuariosJuegoRel::class)->findAll();
        $skins = null;
        foreach ($comprados as $comprado){

            if ($comprado->getAlmiUsuariosJuego()->getId() == $this->get('session')->get('userID')){

                $skins[] = array('id'=>$comprado->getAlmiSkinsJuego()->getId(), 'nombreSkin' => $comprado->getAlmiSkinsJuego()->getNombreSkin(), 'precio' => $comprado->getAlmiSkinsJuego()->getPrecio(), 'ruta' => $comprado->getAlmiSkinsJuego()->getRuta(), 'comprado' => true);

            }

        }

        $parametros['skins'] = $skins;

        return $this->render('Tienda/Skins/skins.html.twig', $parametros);

    }

    /**
     * @Route("/comprar/{idSkin}/{idUser}", name="comprar")
     */
    public function comprar($idSkin, $idUser){

        $entityManager = $this->getDoctrine()->getManager();

        $compra = new AlmiSkinsJuegoAlmiUsuariosJuegoRel();

        $skin = $entityManager->getRepository(AlmiSkinsJuego::class)->find($idSkin);

        $user = $entityManager->getRepository(AlmiUsuariosJuego::class)->find($idUser);

        $dinero_user = $user->getDinero();
        $dinero_skin = $skin->getPrecio();

        if ($dinero_skin>$dinero_user){

            $parametros['compra'] = 'No tienes suficiente dinero';

        }

        if ($dinero_skin<$dinero_user){

            $compra->setAlmiUsuariosJuego($user);
            $compra->setAlmiSkinsJuego($skin);

            $entity_Manager = $this->getDoctrine()->getManager();
            $entity_Manager->persist($compra);
            $entity_Manager->flush();

            $total = $dinero_user - $dinero_skin;
            $user->setDinero($total);

            $entity_Manager->persist($user);
            $entity_Manager->flush();

            $this->get('session')->set('dinero', $total);

            $parametros['compra'] = 'Compra Realizada';

        }

        $comprados = $entityManager->getRepository(AlmiSkinsJuegoAlmiUsuariosJuegoRel::class)->findAll();
        $skins = null;

        foreach ($comprados as $comprado){

            if ($comprado->getAlmiUsuariosJuego()->getId() == $this->get('session')->get('userID')){

                $skins[] = array('id'=>$comprado->getAlmiSkinsJuego()->getId(), 'nombreSkin' => $comprado->getAlmiSkinsJuego()->getNombreSkin(), 'precio' => $comprado->getAlmiSkinsJuego()->getPrecio(), 'ruta' => $comprado->getAlmiSkinsJuego()->getRuta(), 'comprado' => true);

            }


        }

        $parametros['skins'] = $skins;

        return $this->render('Tienda/Skins/skins.html.twig', $parametros);
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

                $user = array('username' => $dato->getUsuario(), 'email' => $user_query->getEmail(), 'password'=>$dato->getPasswd());
                $parametros['user'] = $user;

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

                            $skins_juego = $entity_manager->getRepository(AlmiSkinsJuego::class)->findAll();

                            foreach ($skins_juego as $skin_juego){

                                $skins[] = array('id' => $skin_juego->getId(), 'nombreSkin' => $skin_juego->getNombreskin(), 'precio' => $skin_juego->getPrecio(), 'ruta' => $skin_juego->getRuta());

                            }

                            //$this->USER_ID = $item->getId();

                            $users_juego = $entity_manager->getRepository(AlmiUsuariosJuego::class)->findAll();

                            foreach ($users_juego as $user_juego){

                                if ($user_juego->getFosuser() == $item->getId()){

                                    $session = new Session();
                                    $session->set('userID', $item->getId());
                                    $session->set('nombre', $item->getUsername());
                                    $session->set('email', $item->getEmail());
                                    $session->set('dinero', $user_juego->getDinero());
                                    $session->set('victoria', $user_juego->getVictoria());
                                    $session->set('derrota', $user_juego->getDerrota());
                                    $session->start();
                                }
                            }

                            $parametros['skins'] = $skins;
                            $parametros['error'] = null;

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