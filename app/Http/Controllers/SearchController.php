<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use Illuminate\Support\Facades\Auth;
use App\User;

class SearchController extends Controller
{
    public function search() {
        $poisk = $_GET['findme'];

        if(Auth::user()->isAdmin) {
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

        return view('words.search', compact('objs','poisk'));

    }
    public function commonSearch(){

        $poisk = $_GET['findme'];

        $objs = Word::where('expression','LIKE', '%'.$poisk.'%')
        ->orWhere('meaning','LIKE','%'.$poisk)
        ->orderBy('expression')
        ->paginate(5);

        return view('words.search_common', compact('objs','poisk'));
    }
}
