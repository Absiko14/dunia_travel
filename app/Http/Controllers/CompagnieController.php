<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompagnieRequest;
use App\Models\compagnie;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    public function addcomp()
    {
        return view('Compagnie\add');
    }
    public function authcomp(CompagnieRequest $request)
    {
        compagnie::create([
            'nom'=> $request->nom,
        ]);
        return redirect('/admin/comps');
    }
    
    public function editcomp(compagnie $comp)
    {
        return view('Compagnie\edit', compact('comp'));
    }
    
    
    public function editcompauth(CompagnieRequest $request, $id)
    {
        $comp = compagnie::find($id);
        $comp->nom = $request->nom;
        $comp->save();
        
        return redirect('/admin/agence');
    }
}
