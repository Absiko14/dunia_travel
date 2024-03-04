<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\agences;
use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;

class AgenceController extends Controller
{
    public function addagence()
    {
        return view('Agence\add');
    }
    public function authagence(AgenceRequest $request)
    {
        Agence::create([
            'nom'=> $request->nom,
            'logo'=> $request->logo,
            'ville'=> $request->ville,
            'pays'=> $request->pays,
            'adresse'=> $request->adresse,
            'description'=> $request->description
        ]);
        return redirect('/admin/agence');
    }
    
    public function editagence(agence $agence)
    {
        return view('Agence\edit', compact('agence'));
    }
    
    
    public function editagenceauth(AgenceRequest $request, $id)
    {
        $agence = Agence::find($id);
        $agence->nom = $request->nom;
        $agence->logo = $request->logo;
        $agence->ville = $request->ville;
        $agence->pays = $request->pays;
        $agence->adresse = $request->adresse;
        $agence->description = $request->description;
        $agence->sigle = $request->sigle;
        $agence->save();
        
        return redirect('/admin/agence');
    }
}
