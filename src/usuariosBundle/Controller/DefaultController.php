<?php

namespace usuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('usuariosBundle:Default:index.html.twig');
    }
}
