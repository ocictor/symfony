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
            ],
            'personal_interests' => [
                'basketball' => [
                    'icon' => 'basketball-ball',
                    'title' => 'Basketball',
                    'description' => 'Passionné de basketball, ce sport me permet de développer mon esprit d\'équipe et mon sens de la stratégie.'
                ],
                'communication' => [
                    'icon' => 'users',
                    'title' => 'Relations Humaines',
                    'description' => 'Mon expérience dans la restauration m\'a permis de développer d\'excellentes compétences en communication.'
                ],
                'travel' => [
                    'icon' => 'plane',
                    'title' => 'Voyages',
                    'description' => 'Les voyages sont pour moi une source d\'enrichissement personnel et culturel.'
                ]
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

    #[Route('/formulaire', name: 'app_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('blog/formulaire.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'categories' => [
                'programmer' => [
                    'icon' => 'fa-code',
                    'competences' => [
                        'AC1' => ['titre' => 'Développement Web', 'niveau' => 3],
                        'AC2' => ['titre' => 'Scripts d\'automatisation', 'niveau' => 2]
                    ]
                ],
                'administrer' => [
                    'icon' => 'fa-server',
                    'competences' => [
                        'AC3' => ['titre' => 'Administration Système', 'niveau' => 3],
                        'AC4' => ['titre' => 'Sécurité', 'niveau' => 2]
                    ]
                ],
                'connecter' => [
                    'icon' => 'fa-network-wired',
                    'competences' => [
                        'AC5' => ['titre' => 'Infrastructure Réseau', 'niveau' => 3],
                        'AC6' => ['titre' => 'Services Réseau', 'niveau' => 2]
                    ]
                ]
            ]
        ]);
    }

    #[Route('/download-cv', name: 'download_cv')]
    public function downloadCV(): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/downloads/cv.pdf';
        
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('Le CV n\'existe pas.');
        }

        return $this->file($filePath, 'cv-celarier-victor.pdf');
    }
}