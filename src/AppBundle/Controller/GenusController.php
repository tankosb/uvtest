<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of GenusController
 *
 * @author tankosic.branislav
 */
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenusController extends Controller{
  
  /**
    *  @Route("/genus/{genusName}")
    */
  public function showAction($genusName) {
    
   
    /* Sklonjam $notes odavde u jednom momentu kada zelim da naprvaim funkciju getNotesAction
     * koja mi sluzi da prikazem podatke iz varijeble $notes. Tu punim podatke
     * koji su lepse organizovani u json struktura
    $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
    ];
     * 
     */
    
//    $templating = $this->container->get('templating');
//    $html = $templating->render('genus/show.html.twig', array(
//            'name' => $genusName
//    ));
//    
//    return new Response($html);
    
    
    
    return $this->render('genus/show.html.twig', array(
            'name' => $genusName,
           //'notes' => $notes
    ));
    
    
  }
  
  /**
   * 
   * @Route("/genus/{genusName}/notes", name="genus_show_notes")
   * @Method("GET")
   */
  public function getNotesAction() {
   
    $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => 'http://localhost/uvsr/web/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => 'http://localhost/uvsr/web/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => 'http://localhost/uvsr/web/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
    ];
    
    $data = [
        'notes' => $notes,
    ];
            
    //return new Response(json_encode($data));
    return new JsonResponse($data);
    
  }
  
  
}
