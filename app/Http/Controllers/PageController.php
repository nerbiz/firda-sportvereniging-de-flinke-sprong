<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function createData(): void
    {
        // Maak hier teams en spelers aan, met behulp van models
    }

    public function showData(): View
    {
        // Haal alle teams en spelers op en geef het aan de 'show' view

        return view('show');
    }
}
