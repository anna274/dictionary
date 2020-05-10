@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
              @if(Auth::user()->isAdmin)
                <h2 class="workspace__title">Dictionary Managment</h2>
              @else
                <h2 class="workspace__title">My Dictionary</h2>
              @endif
            </div>
            <div class="blank show-blank">
              <div class="return">
                <a href="/words">
                  <span class="ico ico-return"></span>
                </a>
              </div>
              <h3 class="word">{{$word['expression']}}</h3>
              <div class="word__definition">{{$word['meaning']}}</div>
              <div class="word__example">{{$word['example']}}</div>
              <div class="options show-blank__options">
                <a href="/words/{{$word['id']}}/edit" class="button button_colored-yellow">Edit</a>

                <form action="{{route('words.destroy',[$word->id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="button button_colored-pink">Delete</button>               
                </form>
              </div>  
            </div>       
        </div>
    </main>  
@endsection