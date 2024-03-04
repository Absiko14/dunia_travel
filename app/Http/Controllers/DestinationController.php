<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinationRequest;
use App\Models\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function adddestiation()
    {
        return view('Destiation\add');
    }
    public function authcomptebank(DestinationRequest $request)
    {
        destination::create([
            'ville'=> $request->ville,
            'description'=> $request->description
        ]);
        return redirect('/admin/adddestiations');
    }
    
    public function editdestiation(destination $destiation)
    {
        return view('Destiation\edit', compact('destiation'));
    }
    
    
    public function editcomptebankauth(DestinationRequest $request, $id)
    {
        $destiation = destination::find($id);
        $destiation->ville = $request->ville;
        $destiation->description = $request->description;
        $destiation->save();
        
        return redirect('/admin/destiation');
    }
}
