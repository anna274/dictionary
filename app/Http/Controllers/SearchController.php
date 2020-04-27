<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class SearchController extends Controller
{
    public function getIndex(){

        $poisk = $_GET['findme'];

        $objs = Word::where('expression','LIKE', '%'.$poisk.'%')
                ->orWhere('meaning','LIKE','%'.$poisk)
                ->orderBy('expression')
                ->paginate(5);

        return view('words.search', compact('objs','poisk'));
    }
}
