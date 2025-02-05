<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
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
        // Hier is dus geen view nodig en ook geen return

        $team1 = Team::create([
            'name' => 'BV Lwd',
            'sport' => 'Badminton',
        ]);

        $team2 = Team::create([
            'name' => 'Bootjesclub',
            'sport' => 'Roeien',
        ]);

        Player::create([
            'team_id' => $team1->id,
            'first_name' => 'A',
            'surname' => 'van der B',
        ]);

        Player::create([
            'team_id' => $team2->id,
            'first_name' => 'Henk',
            'surname' => 'B',
        ]);
    }

    public function showData(): View
    {
        // Haal alle teams en spelers op en geef het aan de 'show' view

        // Met all() haal je alle rijen op uit de tabel
        $allPlayers = Player::all();

        // In plaats van alle rijen ophalen, kun je ook filteren met where()
        $allTeams = Team::where('id', '>', 2)->get();

        // dd() is de 'var_dump' van Laravel, het output een variabele en stopt dan met een exit
        dd($allPlayers, $allTeams);

        return view('show');
    }
}
