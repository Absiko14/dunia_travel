<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolsRequest;
use App\Models\vol;
use Illuminate\Http\Request;

class VolsController extends Controller
{
    public function addvols()
    {
        return view('Vols\add');
    }
    public function authtelephone(VolsRequest $request)
    {
        vol::create([
            'ref'=> $request->ref,
            'date_depart'=> $request->date_depart,
            'date_arriver'=> $request->date_arriver,
        ]);
        return redirect('/admin/addvolss');
    }
    
    public function edittelephone(vol $vols)
    {
        return view('Vols\edit', compact('vols'));
    }
    
    
    public function editemail(VolsRequest $request, $id)
    {
        $vols = vol::find($id);
        $vols->ref = $request->ref;
        $vols->date_depart = $request->date_depart;
        $vols->date_arriver = $request->date_arriver;
        $vols->save();
        
        return redirect('/admin/vols');
    }
}
