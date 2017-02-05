<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\SigningType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @Route("/signing",name="signing")
     * @Method("GET|POST")
     */
    public function signingAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(SigningType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('user/signing.html.twig', array());
    }
}
