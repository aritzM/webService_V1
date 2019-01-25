<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/01/19
 * Time: 14:04
 */

namespace App\Controller;

use App\Entity\FosUser;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class SessionController extends AbstractController
{
    /**
     * @Route("/ws/session", name="session")
     */
    public function index()
    {
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);
    }
    /**
     * @Route("/ws/login", name="login", methods={"POST"})
     */
    public function login(){



        $datos = file_get_contents('php://input');
        $request = json_decode($datos);

        $username = $request->username;
        $password_url = $request->password;

        //$username = $_POST['username'];
        //$password_url = $_POST['password'];

        $entityManager = $this->getDoctrine()->getManager();

        $userRepository = $entityManager->getRepository(FosUser::class)->findAll();
        $factory_encoder = new BCryptPasswordEncoder(12);

        $user = array();
        //$factory = $this->get('security.encoder_factory');

        foreach ($userRepository as $user_query){

            if($user_query->getUsername() == $username){

                $plain_password = $factory_encoder->isPasswordValid($user_query->getPassword(),$password_url,$user_query->getSalt());
                //var_dump($plain_password);
                //var_dump($user_query->getPassword());
                //die();

                if ($user_query->getPassword() == $plain_password){

                    $user = $user_query->getId();

                }
            }
        }

        return $this->enviar($user);
    }

    /**
     ** @Route("/ws/register", name="register", methods={"POST"})
     */

    public function registerAction(){

        $datos = file_get_contents('php://input');
        $request = json_decode($datos);

        $factory_encoder = new BCryptPasswordEncoder(12);


        $new_fos_user = new FosUser();
        $new_fos_user->setEmail($request->email);
        $new_fos_user->setUsername($request->username);
        $new_fos_user->setEnabled(true);
        $new_fos_user->setSalt(null);

        $plain_text = $factory_encoder->encodePassword($request->password, $new_fos_user->getSalt());
        $new_fos_user->setPassword($plain_text);

        $new_fos_user->setRoles('a:0:{}');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($new_fos_user);
        $entityManager->flush();

        $parametros['insertado'] = true;

        return $this->enviar($parametros);
    }

    public function enviar($user){
        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData(array('userID' =>$user));
        return $response;
    }
}
