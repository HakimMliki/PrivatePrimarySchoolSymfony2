<?php
/**
 * Created by PhpStorm.
 * User: Hakim Mliki
 * Date: 13/07/2016
 * Time: 21:50
 */

namespace Ecole\PrimaireBundle\Controller\BackOffice;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class HomeController extends Controller
{

    public function homeAction()
    {
        return $this->render('EcolePrimaireBundle:BackOffice:home.html.twig');
    }

}