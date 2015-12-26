<?php

namespace JCIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JCIController extends Controller
{
    public function AccueilAction()
    {
        return $this->render('JCIBundle:General:index.html.twig', array());
    }
}