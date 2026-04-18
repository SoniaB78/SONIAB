<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', [
            'title' => 'Accueil - Sonia B',
            'metaDescription' => 'Portfolio de Sonia B, intégratrice web et développeuse spécialisée en accessibilité, SEO et interfaces modernes.',
            'currentUrl' => 'http://localhost/SONIAB/public/',
            'ogImage' => '/assets/img/og-default.jpg'
        ]);
    }
}