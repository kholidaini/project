<?php

namespace App\Models;

use CodeIgniter\Model;

class GamesModel extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'id_games';
    protected $useTimestamps = true;
}
