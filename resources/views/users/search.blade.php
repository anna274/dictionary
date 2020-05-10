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
              <div class="options__search">
                <form class="search" action="/users/search">
                  <input class="search__input" type="text" name="findme" placeholder='{{$poisk}}'>
                    <button class="search__button" type="submit">
                      <span class="ico ico-search"></span>
                  </button>
                </form>
                <a href="/users" class="button button_colored-yellow">Reset</a>
              </div>
            </div>
            <div class="blank blank_wide">
              <div class="word-lines">
                @foreach($objs as $obj)
                  @if($obj['id'] == Auth::user()->id)
                    <div class="user-line me">
                      <div class="user__name me">{{$obj['name']}}</div>
                      @if($obj['isAdmin'])
                        <div class="user__status">admin</div>
                      @else
                        <div class="user__status">student</div>
                      @endif
                      <div class="user__name">{{$obj['email']}}</div>
                    </div>
                  @else
                    <a class="user-line"  href="users/{{$obj['id']}}">
                      <div class="user__name">{{$obj['name']}}</div>
                      @if($obj['isAdmin'])
                        <div class="user__status">admin</div>
                      @else
                        <div class="user__status">student</div>
                      @endif
                      <div class="user__name">{{$obj['email']}}</div>
                    </a>
                  @endif
                @endforeach
              </div>
            </div> 
            <div class="workspace__pagination">
              {!! $objs->links();!!}
            </div>        
        </div>
    </main>  
@endsection