<?php

namespace App\Controllers;

use App\Models\GamesModel;

class Games extends BaseController
{

    protected $gamesModel;
    public function __construct()
    {
        $this->gamesModel = new GamesModel();
    }
    public function index()
    {

        $games = $this->gamesModel->findAll();

        $data = [
            'title' => 'SYTX Games',
            'games' => $games
        ];

        return view('games/index', $data);
    }
}
