<?php

namespace App\Http\Controllers;

use App\Models\{Forfait,Compte};
use App\Models\Compte_forfait;
use DateInterval;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class ForfaitController extends Controller
{
    public function index($id)
    {
        $forfaits = Forfait::all();
        $compte = Compte::findOrFail($id);
        return view ('forfait', compact('forfaits'),compact('compte'));
    }
    
    public function store($id)
    {      
        $forfaitPayer = new Compte_forfait();
        $forfaitPayer->forfait_id = $id;
        $forfaitPayer->compte_id  = request('compte');
        $forfaitPayer->save();

       return redirect('index')
       ->with('success','Achat effectué avec succès !');;
    }

    public function show(string $id)
    {
        $forfait = Forfait::FindOrFail($id);
        return view ('acceuil', compact ('forfait'));
    }
}
