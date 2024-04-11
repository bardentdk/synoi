<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formations = Formation::all();
        $categories = Categorie::all();
        return view('catalogue', compact('formations', 'categories'));
    }

    public function show(int $id)
    {
        $form = Formation::all()
                    ->where('id', $id);
        return view('formation', compact('form'));
    }
}
