<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function qhse()
    {
        return view('formations.qhse');
    }

    public function web()
    {
        return view('formations.web');
    }
    public function paramedical()
    {
        return view('formations.paramedical');
    }

    public function energieRenouvelable()
    {
        return view('formations.energieRenouvelable');
    }
    public function delegue_medical(){
        return view("formations.delegue_medical");
    }


    public  function logistique(){
        return view('formations.logistique');
    }


    public function comptabilite(){
        return view("formations.comptabilite");
    }

    public function langues(){
        return view('formations.langues');
    }



}
