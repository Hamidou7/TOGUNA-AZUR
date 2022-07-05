<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passager extends Model
{

    protected $filliable = ["num_piece", "nom", "prenom", "sexe", "place", "listes_id"];

    use HasFactory;
    public function passagers()
    {
        $this->hasOne(passagers::class);
    }
}
