<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller {

    /**
     * Главная страница сайта
     *
     * @return View
     */
    public function index(): View
    {
        return view('main.home');
    }
}
