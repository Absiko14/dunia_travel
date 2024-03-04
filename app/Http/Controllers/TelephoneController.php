<?php

namespace App\Http\Controllers;

use App\Http\Requests\TelephoneRequest;
use App\Models\telephone;
use Illuminate\Http\Request;

class TelephoneController extends Controller
{
    public function addtelephone()
    {
        return view('Telephone\add');
    }
    public function authtelephone(TelephoneRequest $request)
    {
        telephone::create([
            'num_tel'=> $request->num_tel,
        ]);
        return redirect('/admin/addtelephones');
    }
    
    public function edittelephone(telephone $telephone)
    {
        return view('Telephone\edit', compact('telephone'));
    }
    
    
    public function editemail(TelephoneRequest $request, $id)
    {
        $telephone = telephone::find($id);
        $telephone->num_tel = $request->num_tel;
        $telephone->save();
        
        return redirect('/admin/telephone');
    }
}
