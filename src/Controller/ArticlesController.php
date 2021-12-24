<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_show_all")
     */

    public function showArticles(ArticleRepository $articleRepository): Response
    {
        $articles=$articleRepository->findAll();
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/articles/delete/{id}")
     */

    public function deleteArticle(EntityManagerInterface $entityManager, Article $article): Response
    {
        $entityManager->remove($article);
        $entityManager->flush();
        return $this->redirectToRoute('articles_show_all');
    }

    /**
     * @Route("/articles/add", name="ajout_article")
     */
    public function addArticle(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('articles_show_all');
        }
        return $this->render('article/form.html.twig', [
            'controller_name' => 'Ajout article',
            'form' => $form->createView(),
        ]);
    }
}
