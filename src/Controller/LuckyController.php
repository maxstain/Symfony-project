<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    
    public function number($max): Response
    {
        if (!is_numeric($max)) {
            throw new HttpException(404, "Not Found !!");
        }
        $number = random_int(0, $max);
        $phrase = "Lucky number is: ";
        $num = [0,1,2,3,4,5,6];
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'phrase' => $phrase,
            'num' => $num,
        ]);
    }

    /**
     * @Route("/index")
     */
    public function index(): Response
    {
        $req = Request::createFromGlobals();
        $mail = $req->query;
        return $this->render('lucky/number.html.twig', [
            
        ]);
    }
}
