<?php

namespace App\Http\Controllers;

use App\Http\Requests\EscaleRequest;
use App\Models\escale;
use Illuminate\Http\Request;

class EscaleController extends Controller
{
    public function addtelephone()
    {
        return view('Escale\add');
    }
    public function authtelephone(EscaleRequest $request)
    {
        escale::create([
            'date_depart'=> $request->date_depart,
            'date_arriver'=> $request->date_arriver,
        ]);
        return redirect('/admin/addescales');
    }
    
    public function edittelephone(escale $escale)
    {
        return view('Escale\edit', compact('escale'));
    }
    
    
    public function editemail(EscaleRequest $request, $id)
    {
        $escale = escale::find($id);
        $escale->date_depart = $request->date_depart;
        $escale->date_arriver = $request->date_arriver;
        $escale->save();
        
        return redirect('/admin/telephone');
    }
}
