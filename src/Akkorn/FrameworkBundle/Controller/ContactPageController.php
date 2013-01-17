<?php

namespace Akkorn\FrameworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactPageController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AkkornFrameworkBundle:ContactPage:index.html.twig');
    }
}
