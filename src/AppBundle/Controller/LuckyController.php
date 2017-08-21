<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of LuckyController
 *
 * @author tankosic.branislav
 */


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
  //put your code here
  /** 
     * @Route("/lucky/number", name="lucky_number")
     *
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
          
//       return new Response(
//            '<html><body><b>Lucky number: '.$number.'</b></body></html>'
//        );
             
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        )); 
    }
}


