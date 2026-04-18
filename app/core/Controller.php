<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = [])
    {
        extract($data); //transforme tableau en variables

        ob_start(); //capture le HTML
        require "../app/views/pages/" . $view . ".php";
        $content = ob_get_clean(); //injecté dans le layout

        require "../app/views/layouts/main.php";
    }
}