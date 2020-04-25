@extends('layouts.default')
@section('content') 
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Dictionary Managment</h2>
                <p class="workspase__title-comment"></p>
            </div>
            <div class="options">
              <form class="search">
                <input class="search__input" type="text" name="findme" placeholder=''>
                  <button class="search__button" type="submit">
                    <span class="ico ico-search"></span>
                 </button>
             </form>
              <a href="words/create" class="button button_colored-pink">Add new word</a>
            </div>
            <div class="blank blank_wide">
                <div class="word-lines">
                  @foreach($words as $word)
                  <div class="word-line">
                    <div class="word"><a class="show-link" href="words/{{$word['id']}}">{{$word['expression']}}</a></div>
                    <div class="word__definition">{{$word['meaning']}}</div>
                  </div>
                  @endforeach
                </div>
            </div> 
            <div class="workspace__pagination">
              {!! $words->links();!!}
            </div>        
        </div>
    </main>  
@endsection