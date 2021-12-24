<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutArticleController extends AbstractController
{
    /**
     * @Route("/articles/add", name="ajout_article")
     */
    public function index(): Response
    {
        return $this->render('ajout_article/index.html.twig', [
            'controller_name' => 'Ajout article',
        ]);
    }

    /**
     * @Route("/articles/add?designateur={designation}&description={description}&prix={prix}")
     */
    public function addArticle(EntityManagerInterface $entityManager, string $designation, string $Description, float $prix): Response
    {
        $article = new Article();
        $article->setDesignation($designation);
        $article->setDescription($Description);
        $article->setPrix($prix);
        $entityManager->persist($article);
        $entityManager->flush();
        return $this->redirectToRoute('/articles');
    }
}
