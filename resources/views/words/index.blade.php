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
                <p class="workspase__title-comment"></p>
            </div>
            <div class="options">
              <form class="search" action="/search">
                <input class="search__input" type="text" name="findme" placeholder='Find me...'>
                  <button class="search__button" type="submit">
                    <span class="ico ico-search"></span>
                 </button>
             </form>
             <a href="words/create" class="button button_colored-pink">Add new word</a>
            </div>
            <div class="blank blank_wide">
              @if(count($words) == 0)
                <div class="blank__comment">
                  <h2>Your dictionary is empty.</h2>
                  <h3>Add something awesome!</h3>
                </div>
              @else
                <div class="word-lines">
                  @foreach($words as $word)
                  <div class="word-line">
                    <div class="word"><a class="show-link" href="words/{{$word['id']}}">{{$word['expression']}}</a></div>
                    <div class="word__definition">{{$word['meaning']}}</div>
                  </div>
                  @endforeach
                </div>
              @endif
            </div> 
            <div class="workspace__pagination">
              {!! $words->links();!!}
            </div>        
        </div>
    </main>  
@endsection