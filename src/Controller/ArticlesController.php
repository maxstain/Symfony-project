<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles")
     */

    public function showArticles(ArticleRepository $articleRepository): Response
    {
        $articles=$articleRepository->findAll();
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/articles/add/{designation}/{Description}/{prix}")
     */

    public function addArticle(EntityManagerInterface $entityManager, string $designation, string $Description, float $prix): Response
    {
        $article = new Article();
        $article->setDesignation($designation);
        $article->setDescription($Description);
        $article->setPrix($prix);
        $entityManager->persist($article);
        $entityManager->flush();
        return $this->render('articles/index.html.twig', [
            'articles' => $article,
            'adjectif' => 'ajoutée',
        ]);
    }
}
