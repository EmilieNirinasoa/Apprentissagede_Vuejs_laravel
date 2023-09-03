<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AffichageController extends Controller
{
    public function index()
{
    $donnees = Affichage::all();
    return response()->json($donnees);
}

public function store(Request $request)
{
     // Validez les données reçues
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
        ]);
        $affichage=new Affichage();
        $affichage->nom=$request->nom;
        $affichage->prenom=$request->prenom;
        $affichage->save();

        // Insérez les données dans la base de données
       

        return response()->json(['message' => 'Données insérées avec succès'], 201);
    
   
}

public function destroy($id)
{
    // Trouvez la ressource à supprimer par son ID
    $ressource = Affichage::find($id);

    if (!$ressource) {
        return response()->json(['message' => 'La ressource n\'existe pas'], 404);
    }

    // Supprimez la ressource
    $ressource->delete();

    return response()->json(['message' => 'La ressource a été supprimée avec succès']);
}

public function update(Request $request, $id)
{
    // Trouvez la ressource à mettre à jour par son ID
    $ressource = Affichage::find($id);

    if (!$ressource) {
        return response()->json(['message' => 'La ressource n\'existe pas'], 404);
    }

    // Mettez à jour la ressource avec les nouvelles données
    $ressource->update($request->all());

    return response()->json(['message' => 'La ressource a été mise à jour avec succès']);
}




}
