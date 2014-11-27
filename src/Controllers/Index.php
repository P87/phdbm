<?php

namespace P87\PHMVCF\Controllers;

use P87\PHMVCF\App\View;
use P87\PHMVCF\Models;

class Index extends Controller
{
    public function index()
    {
        $view = new View();
        $view
            ->set('content', View::view('login', ['p' => '<p>Test right here</p>']))
            ->set('title', 'PHDBM - Database Monitor');

        $view->render();
    }
}