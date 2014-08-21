<?php

namespace Mesd\SwiftmailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                    'MesdSwiftmailerBundle:Default:email.txt.twig'
                )
            )
        ;
        $this->get('mailer')->send($message);

        return $this->render('MesdSwiftmailerBundle:Default:index.html.twig');
    }
}
