<?php

namespace LearnSF\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostController extends Controller
{


    /**
     * @Template
     */

    public function listAction(){

        $repositorio = $this->get('doctrine.orm.entity_manager')->getRepository('LearnSFBlogBundle:Post');

        return['posts'=> $repositorio->findAll()];

    }
}
