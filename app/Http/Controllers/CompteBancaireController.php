<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompteBancaireRequest;
use App\Http\Requests\NumeroBancaireRequest;
use App\Models\compte;
use App\Models\numerobancaire;
use Illuminate\Http\Request;

class CompteBancaireController extends Controller
{
    public function addcomptebank()
    {
        return view('CompteBancaire\add');
    }
    public function authcomptebank(NumeroBancaireRequest$request)
    {
        compte::create([
            'num_banque'=> $request->num_banque,
        ]);
        return redirect('/admin/comptebanks');
    }
    
    public function editcomp(numerobancaire $comptebank)
    {
        return view('CompteBancaire\edit', compact('comptebank'));
    }
    
    
    public function editcomptebankauth(NumeroBancaireRequest $request, $id)
    {
        $comptebank = numerobancaire::find($id);
        $comptebank->num_banque = $request->num_banque;
        $comptebank->save();
        
        return redirect('/admin/agence');
    }
}
