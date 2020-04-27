@extends('layouts.default')
@section('content') 
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Search Results</h2>
                <p class="workspase__title-comment"></p>
            </div>
            <div class="options">
              @if($isAdmin)
                <form class="search" action="{{url('/search'), $isAdmin}}">
                  <input class="search__input" type="text" name="findme" placeholder='{{$poisk}}'>
                    <button class="search__button" type="submit">
                      <span class="ico ico-search"></span>
                  </button>
              </form>
              @else
                <form class="search" action="{{url('/my-dictionary/search'), $isAdmin}}">
                  <input class="search__input" type="text" name="findme" placeholder='{{$poisk}}'>
                    <button class="search__button" type="submit">
                      <span class="ico ico-search"></span>
                  </button>
              </form>
              @endif
              <a href="words/create" class="button button_colored-pink">Add new word</a>
            </div>
            <div class="blank blank_wide">
                @if(count($objs) == 0)
                  <div class="blank__comment">
                    <h2>Oops, no results.</h2>
                    <h3>Try find something else :)</h3>
                  </div>
                @else
                <div class="word-lines">
                    @foreach($objs as $obj)
                    <div class="word-line">
                      <div class="word"><a class="show-link" href="words/{{$obj['id']}}">{{$obj['expression']}}</a></div>
                      <div class="word__definition">{{$obj['meaning']}}</div>
                    </div>
                    @endforeach
                  </div>
                @endif
            </div> 
            <div class="workspace__pagination">
              {!! $objs->links();!!}
            </div>        
        </div>
    </main>  
@endsection