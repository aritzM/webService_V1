<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/01/19
 * Time: 13:34
 */

namespace App\Controller;
use App\Entity\FosUser;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class WWWController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index(){
        $parametros = array('title' => 'Tienda Figther');
        return $this-> render('index.html.twig', $parametros);
    }

    /**
     * @Route("/ver", name="ver")
     */

    public function ver(){

    }

    /**
     * @Route("/comprar", name="comprar")
     */

    public function comprar(){

    }
    /**
     * @Route("/config", name="config")
     */

    public function config(){

    }
    /**
     * @Route("/login", name="login")
     */

    public function login(){

        $parametros = array();

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if ($_POST['username'] != "" && $_POST['password'] != ""){

                $factory_encoder = new BCryptPasswordEncoder(12);
                $entity_manager = $this->getDoctrine()->getManager();
                $user_query = $entity_manager->getRepository(FosUser::class)->findAll();

                foreach ($user_query as $item){

                    if ($_POST['username'] == $item->getUsername()){

                        $plain_password = $factory_encoder->isPasswordValid($item->getPassword(),$_POST['password'],$item->getSalt());

                        if($plain_password == $item->getPassword()){

                            $parametros = array('userID' => $item->getId());

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