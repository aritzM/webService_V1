<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/01/19
 * Time: 13:34
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WWWController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index(){
        $parametros = array('title' => 'Tienda Figther');
        return $this-> render('index.html.twig', $parametros);
    }
}