<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'name' => 'CELARIER Victor',
            'group' => 'A2',
            'introduction' => 'Étudiant passionné en Réseaux et Télécommunications avec un fort intérêt pour la cybersécurité et l\'infrastructure cloud.'
        ]);
    }

    #[Route('/apropos', name: 'app_apropos')]
    public function apropos(): Response
    {
        return $this->render('blog/apropos.html.twig', [
            'hobbies' => [
                'Recherche en Cybersécurité',
                'Architecture Réseau',
                'Informatique en Cloud',
                'Contribution Open Source'
            ]
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig', [
            'dreamJob' => 'Ingénieur Réseaux et Télécommunications',
            'education' => [
                [
                    'degree' => 'BUT Réseaux et Télécommunications',
                    'school' => 'IUT de Roanne',
                    'year' => '2024-2025'
                ],
                [
                    'degree' => 'Baccalauréat STI2D',
                    'school' => 'Lycée de Mauriac',
                    'year' => '2020-2024'
                ]
            ],
            'skills' => [
                'Protocoles Réseaux',
                'Analyse de Sécurité',
                'Infrastructure Cloud',
                'Administration Système'
            ]
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'projects' => [
                [
                    'title' => 'Implémentation Sécurité Réseau',
                    'description' => 'Mise en place d\'une infrastructure réseau sécurisée',
                    'skills' => ['Sécurité', 'Réseaux', 'Documentation']
                ]
            ]
        ]);
    }
}