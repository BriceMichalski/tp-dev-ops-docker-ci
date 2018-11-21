<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){

        $date = date('Y-m-d\TH:i:s.v\Z');

        return $this->render('base.html.twig',array(
            'date' => $date
        ));
    }
}