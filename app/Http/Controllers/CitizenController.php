<?php

namespace App\Http\Controllers;

use App\Citizen;
use App\Http\Requests\RegisterCitizen;
use App\Lga;
use App\State;
use App\Ward;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    //

    public function registerCitizen()

    {
        $wards=Ward::all();
        return view('citizen.create', compact('wards'));
    }


    public function storeCitizen(RegisterCitizen $request)
    {
        Citizen::create($request->all());

        return redirect()->back();
    }


    public function allState()
    {

        $states=State::all();
        return view('citizen.index', compact('states'));

    }

    public function getLga($id)
    {
        $state=State::find($id);
        $lgas=$state->lga;
        return view('citizen.lga', compact('lgas'));
    }

    public function getWard($id)
    {
        $lga=Lga::find($id);
        $wards=$lga->ward;
        return view('citizen.ward', compact('wards'));
    }

    public function getCitizen($id)
    {
        $ward=Ward::find($id);

        $users=$ward->citizen;
        return view('citizen.allcitizen', compact('ward', 'users'));
    }
}
