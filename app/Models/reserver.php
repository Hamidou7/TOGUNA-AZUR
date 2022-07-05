<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserver extends Model
{
    use HasFactory;

    protected $tables = 'passagers';
    protected $filliable = ["num_piece,", "nom", "prenom", "sexe", "place", "listes_id"];
}
