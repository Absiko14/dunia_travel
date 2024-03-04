<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agence;
use App\Models\Telephone;
use App\Models\Destination;
use App\Models\Ville;
use App\Models\sociaux;
use App\Models\compagnie;
use App\Models\email;
use App\Models\numerobancaire;

class AdminController extends Controller
{
    public function index() {
     $destination= destination::first();
     $ville= ville::first();
     $agence= agence::first();
     $contact= telephone::first();
     return view ('admin',[
        'ville'=> $ville,
        'destination'=> $destination,
        'agence'=> $agence,
        'contact'=> $contact,
    ]);
    }
    
        public function agence() {
        $agences = Agence::all();
        return view ('adminagence',[
        'agences'=> $agences,
        ]);
       }

       public function telephone() {
        $listTelephone=telephone::all();
        return view ('agencetelephone',compact('listTelephone'));
       }

       public function email() {
          $listEmail=email::all();
        return view ('agenceEmail',compact('listEmail'));
       }

      

       public function compteBanc() {
        $listBanque=numerobancaire::all();
        return view ('bankagence',compact('listBanque'));
       }

        
    public function sociaux() {
        $listSociaux=sociaux::all();
        return view ('sociauxagence',compact('listSociaux'));
       }

       public function compagnie() {
        $listcompagnie=compagnie::all();
         return view ('compagnie',compact('listcompagnie'));
        }

      
}
