<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    
    public function number(): Response
    {
        $number = random_int(0, 100);
        $phrase = "Lucky number is: ";
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'phrase' => $phrase,
            'numbers' => array(
                array('Number: ', 1),
                array('Number: ', 2),
                array('Number: ', 3),
                array('Number: ', 4),
                array('Number: ', 5),
            ),
        ]);
    }
}
