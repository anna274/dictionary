@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Your Dictionary</h2>
            </div>
            <div class="blank show-blank">
              <div class="return">
                <a href="/common-dictionary">
                  <span class="ico ico-return"></span>
                </a>
              </div>
              <h3 class="word">{{$word['expression']}}</h3>
              <div class="word__definition">{{$word['meaning']}}</div>
              <div class="word__example">{{$word['example']}}</div>
              <div class="options show-blank__options">
                @if(!Auth::user()->isAdmin)
                <a href="/common-dictionary/{{$word['id']}}/add" class="button button_colored-pink">Add to my dictionary</a>
                @endif
              </div>  
            </div>       
        </div>
    </main>  
@endsection