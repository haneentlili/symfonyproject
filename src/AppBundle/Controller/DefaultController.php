<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="index")
     */


    function showingAction(){return $this->render('default/index.html.twig');}

    /**
     * @Route("/cart",name="cart")
     */
function secondAction(){return $this->render('htmlpages/cart.html.twig');}

    /**
     * @Route("/checkout",name="checkout")
     */
    function thirdAction(){return $this->render('htmlpages/checkout.html.twig');}

    /**
     * @Route("/product-details",name="product-details")
     */
    function fourthAction(){return $this->render('htmlpages/product-details.html.twig');}

    /**
     * @Route("/shop",name="shop")
     */
    function fifthAction(){return $this->render('htmlpages/shop.html.twig');}

    /**
     * @Route("/index/clubs",name="clubs")
     */
    function sixthAction(){return $this->render('htmlpages/clubs.html.twig');}

}