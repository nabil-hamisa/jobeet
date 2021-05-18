<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category/{slug}", name="category.show")
     */
    public function index(Category $category): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'category' => $category,
        ]);
    }
}
