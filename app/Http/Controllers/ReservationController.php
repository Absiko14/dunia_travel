<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function addreservation()
    {
        return view('Reservation\add');
    }
    public function authreservation(ReservationRequest $request)
    {
        reservation::create([
            'ref'=> $request->ref,
            'nbre_personne'=> $request->nbre_personne,
            'Montant'=> $request->Montant,
            'date_depart'=> $request->date_depart,
            'date_arriver'=> $request->date_arriver,
        ]);
        return redirect('/admin/reservations');
    }
    
    public function editcomp(reservation $reservation)
    {
        return view('Reservation\edit', compact('reservation'));
    }
    
    
    public function editemail(ReservationRequest $request, $id)
    {
        $reservation = reservation::find($id);
        $reservation->ref = $request->ref;
        $reservation->nbre_personne = $request->nbre_personne;
        $reservation->Montant = $request->Montant;
        $reservation->date_depart = $request->date_depart;
        $reservation->date_arriver = $request->date_arriver;
        $reservation->save();
        
        return redirect('/admin/reservation');
    }
}
