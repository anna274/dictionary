<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::orderBy('expression')->paginate(5);
        return view('words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'expression' => 'required',
            'meaning' => 'required',
            'example' => 'required'
        ]);
        $word = new Word([
            'expression' => $request->get('expression'),
            'meaning' => $request->get('meaning'),
            'example' => $request->get('example')
        ]);
        
        $word->save();

        $user_id = Auth::User()->id;
        $word->users()->attach($user_id);

        Session::flash('success', 'Word Added');
        return redirect()->route('words.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = Word::find($id);
        return view('words.show')->withWord($word);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::find($id);
        return view('words.edit')->withWord($word);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'expression' => 'required',
            'meaning' => 'required',
            'example' => 'required'
        ]);

        $word = Word::find($id);

        $word->expression = $request->input('expression');
        $word->meaning = $request->input('meaning');
        $word->example = $request->input('example');

        $word->save();

        Session::flash('success', 'The word was successfully edited.');

        return redirect()->route('words.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $word = Word::find($id);
        $word->delete();
        Session::flash('success', 'The word was successfully deleted');
        return redirect()->route('words.index');
    }
}
