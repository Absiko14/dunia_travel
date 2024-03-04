<?php

namespace App\Http\Controllers;
use App\Models\Agence;
use App\Models\destination;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){

        $agence= agence::first();
        return view ('index',[
            'agence'=> $agence,
        ]);
    }

    

}
