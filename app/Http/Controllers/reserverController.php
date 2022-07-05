<?php

namespace App\Http\Controllers;

use App\Models\passager;
use App\Models\reserver;
use Illuminate\Http\Request;

class reserverController extends Controller
{
    public function reserver()
    {
        return view('reserver');
    }
    public function reserve(Request $request)
    {
        $eleve = new passager();
        $eleve->num_piece = $request->input('num_piece');
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->sexe = $request->input('sexe');
        $eleve->place = $request->input('place');
        $eleve->listes_id = $request->input('listes_id');
        $eleve->save();
        return redirect('passager');
    }
}
