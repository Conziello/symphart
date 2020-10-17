<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController

{
    /**
     * @Route("/")
     */
    public function homepage(){
     return new Response('what a bewitching controller we have conjureds');    
    }

/**
 * @Route("/questions/{slug}")
 */
    public function show($slug){
       
     return new Response(sprintf('Future page to show a question "%s"!', ucwords(str_replace('-', ' ', $slug))));
    }
}

?>