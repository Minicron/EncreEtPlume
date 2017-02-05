<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Route("/home")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $blogpost_repository = $em->getRepository('AppBundle:Blogpost');
        $blogpost_list = $blogpost_repository->findAll();

        return $this->render('home/index.html.twig', array('blogpost_list' => $blogpost_list));
    }
}
