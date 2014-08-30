<?php

namespace Frontend\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendIndexBundle:Index:index.html.twig');
    }
}
