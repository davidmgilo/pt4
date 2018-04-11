<?php

namespace BasicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BasicController extends Controller
{
    public function holaAction(Request $request)
    {
        return $this->render('BasicBundle:Default:basic.html.twig', array(
            "nom"=> $request->get('nom')
        ));
    }
    
    public function staticAction()
    {
        return $this->render('BasicBundle:Default:lloc.html.twig');
    }
    
    public function aboutAction()
    {
        return $this->render('BasicBundle:Default:about.html.twig');
    }
    
    public function productsAction()
    {
        return $this->render('BasicBundle:Default:products.html.twig');
    }
    
    public function storeAction()
    {
        return $this->render('BasicBundle:Default:store.html.twig');
    }
    
    public function prizesAction()
    {
        return $this->render('BasicBundle:Default:prizes.html.twig');
    }
    
    public function loginAction()
    {
        return $this->render('BasicBundle:Default:login.html.twig');
    }
}
