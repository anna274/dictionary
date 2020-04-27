<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class SearchController extends Controller
{
    public function getUserIndex($isAdmin) {
        $poisk = $_GET['findme'];

        if($isAdmin) {
            $objs = Word::where('expression','LIKE', '%'.$poisk.'%')
            ->orWhere('meaning','LIKE','%'.$poisk)
            ->orderBy('expression')
            ->paginate(5);
        } else {
            $objs = Auth::user()->words()->where('expression','LIKE', '%'.$poisk.'%')
            ->orWhere('meaning','LIKE','%'.$poisk)
            ->orderBy('expression')
            ->paginate(5);
        }

        return view('words.search', compact('objs','poisk', 'isAdmin'));

    }
    public function getIndex($isAdmin){

        $poisk = $_GET['findme'];

        $objs = Word::where('expression','LIKE', '%'.$poisk.'%')
        ->orWhere('meaning','LIKE','%'.$poisk)
        ->orderBy('expression')
        ->paginate(5);

        return view('words.search', compact('objs','poisk', 'isAdmin'));
    }
}
