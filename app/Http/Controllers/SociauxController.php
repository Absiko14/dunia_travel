<?php

namespace App\Http\Controllers;

use App\Http\Requests\SociauxRequest;
use App\Models\sociaux;
use Illuminate\Http\Request;

class SociauxController extends Controller
{
    public function addsociau()
    {
        return view('Sociaux\add');
    }
    public function authsociau(SociauxRequest $request)
    {
        sociaux::create([
            'nom'=> $request->nom,
            'logo'=> $request->logo,
            'lienprofil'=> $request->lienprofil,
        ]);
        return redirect('/admin/addsociaus');
    }
    
    public function editsociau(sociaux $sociau)
    {
        return view('Sociaux\edit', compact('sociau'));
    }
    
    
    public function editemail(SociauxRequest $request, $id)
    {
        $sociau = sociaux::find($id);
        $sociau->nom = $request->nom;
        $sociau->logo = $request->logo;
        $sociau->lienprofil = $request->lienprofil;
        $sociau->save();
        
        return redirect('/admin/sociaux');
    }
}
