<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/01/19
 * Time: 14:04
 */

namespace App\Controller;

use App\Entity\AlmiSkinsJuego;
use App\Entity\AlmiUsuariosJuego;
use App\Entity\FosUser;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class VideojuegoController extends AbstractController
{

    /**
     * @Route("/ws/login", name="wslogin", methods={"POST"})
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

                if ($user_query->getPassword() == $plain_password){

                    $user = array('userID' =>$user_query->getId());
                    break;
                }else{

                    $user = array('error' => "Usuario o contraseña no valido");

                }

            }else{
                $user = array('error' => "Usuario o contraseña incorrectos");

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
        $new_fos_user->setEmailCanonical($request->email);
        $new_fos_user->setUsernameCanonical($request->username);
        $new_fos_user->setUsername($request->username);
        $new_fos_user->setEnabled(true);
        $new_fos_user->setSalt(null);

        $plain_text = $factory_encoder->encodePassword($request->password, $new_fos_user->getSalt());
        $new_fos_user->setPassword($plain_text);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($new_fos_user);
        $entityManager->flush();


        $this->createUserGame($request->username, $request->password);
        $parametros['insertado'] = true;

        return $this->enviar($parametros);
    }

    protected function createUserGame($user, $password){

        $new_game_user = new AlmiUsuariosJuego();
        $new_game_user->setUsuario($user);
        $new_game_user->setPasswd($password);

        $entityManager = $this->getDoctrine()->getManager();

        $idFosUser = $entityManager->getRepository(FosUser::class)->findAll();

        foreach ($idFosUser as $id){

            if ($id->getUsername() == $user){

                $id_insert = $id->getId();

                $new_game_user->setFosuser($id_insert);
            }

        }


        $entityManager1 = $this->getDoctrine()->getManager();
        $entityManager1->persist($new_game_user);
        $entityManager1->flush();
    }
    /**
     * @Route("/ws/info", name="wsinfo", methods={"POST"})
     */
    public function usuario()
    {

        $datos = file_get_contents('php://input');
        $request = json_decode($datos);

        $idUsu = $request->id;

        $entityManager = $this->getDoctrine()->getManager();
        $info_usu = $entityManager->getRepository(AlmiUsuariosJuego::class)->find($idUsu);

        $usu = array();

        $usu[] = array(
           'name' => $info_usu->getName(),
           'apellido' =>$info_usu->getApellido(),
           'usuario' =>$info_usu->getUsuario(),
           'passwd' =>$info_usu->getPasswd(),
           'victoria' =>$info_usu->getVictoria(),
           'derrota'=>$info_usu->getDerrota());

        $parametro = array('usuario'=>$usu);
        return $this->enviar($parametro);

    }

    /**
     * @Route("/ws/skins", name="wskins", methods={"POST"})
     */
    public function skins(){

        $datos = file_get_contents('php://input');
        $request = json_decode($datos);

        $entity_manager = $this->getDoctrine()->getManager();

        if(isset($request->id)){

            $info_skin = $entity_manager->getRepository(AlmiSkinsJuego::class)->find($request->id);
            $skin = array('nombreSkin' => $info_skin->getNombreskin(), 'precio' => $info_skin->getPrecio(), 'ruta' => $info_skin->getRuta());


        }else{

            $info_skin = $entity_manager->getRepository(AlmiSkinsJuego::class)->findAll();

            foreach ($info_skin as $dato){

                $skin[] = array('id'=>$dato->getId(), 'nombreSkin' => $dato->getNombreSkin(), 'precio' => $dato->getPrecio(), 'ruta' => $dato->getRuta());

            }

        }

        return $this->enviar($skin);
    }

    public function enviar($parametros){

        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData($parametros);
        return $response;
    }


}
