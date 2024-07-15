<?php

namespace App\Controllers;
/* pagina principal */
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
