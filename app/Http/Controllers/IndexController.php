<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class IndexController
{

    public function index(): Response
    {
        return Inertia::render('main');
    }

}
