<?php

namespace LearnSF\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class AboutController extends Controller
{

    /**
     * @Route("/about")
     * @Template
     */

    public function aboutAction()
    {
       // return $this->render('LearnSFBlogBundle:About:list.html.twig');
        return [
            'now'=> new \DateTime('now'),
        ];
    }

}
