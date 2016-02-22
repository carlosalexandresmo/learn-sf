<?php

namespace LearnSF\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LearnSFBlogBundle:Default:index.html.twig');
    }
}
