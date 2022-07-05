<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enregistrer extends Model
{
    use HasFactory;

    protected $table = 'listes';
    protected $filliable = ["destination", "date_depart", "heure", "placeA", "placeB", "prixA", "prixB"];
    
}
