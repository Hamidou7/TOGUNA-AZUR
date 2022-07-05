<?php

namespace App\Http\Controllers;

use App\Models\enregistrer;
use App\Models\liste;
use Illuminate\Http\Request;

class enregistrerController extends Controller
{
    public function enregistrer()
    {
        return view('enregistrer');
    }

    // public function insert(Request $request)
    // {
    // $request->validate([
    // "destination" => "required",
    // "date_depart" => "required",
    // "heure" => "required",
    // "placeA" => "required",
    // "placeB" => "required",
    // "prixA" => "required",
    // "prixB" => "required"
    // ]);
    // enregistrer::liste([
    // "destination" => $request->destination,
    // "date_depart" => $request->date_depart,
    // "heure" => $request->heure,
    // "placeA" => $request->placeA,
    // "placeB" => $request->placeB,
    // "prixA" => $request->prixA,
    // "prixB" => $request->prixB
    // ]);
    // return back()->with("success", "enregistrement effectuer avec success");
    // }

    public function enregistre(Request $request)
    {
        $student = new enregistrer();
        $student->destination = $request->input('destination');
        $student->date_depart = $request->input('date_depart');
        $student->heure = $request->input('heure');
        $student->placeA = $request->input('placeA');
        $student->placeB = $request->input('placeB');
        $student->prixA = $request->input('prixA');
        $student->prixB = $request->input('prixB');
        $student->save();
        return redirect('liste');
    }
}
