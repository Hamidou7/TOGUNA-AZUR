<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liste extends Model
{
    use HasFactory;

    protected $filliable = ["destination", "date_depart", "heure", "placeA", "placeB", "prixA", "prixB"];

    public function listes()
    {
        $this->hasOne(listes::class);
    }
}
