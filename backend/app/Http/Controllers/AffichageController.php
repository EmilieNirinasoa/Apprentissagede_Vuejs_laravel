<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use Illuminate\Http\Request;

class AffichageController extends Controller
{
    public function index()
{
    $donnees = Affichage::all();
    return response()->json($donnees);
}

}
