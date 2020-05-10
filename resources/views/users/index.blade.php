@extends('layouts.default')
@section('content') 
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
            <h2 class="workspace__title">User Managment</h2>
                <p class="workspase__title-comment"></p>
            </div>
            <div class="options">
              <form class="search" action="users/search">
                <input class="search__input" type="text" name="findme" placeholder='Find user...'>
                  <button class="search__button" type="submit">
                    <span class="ico ico-search"></span>
                 </button>
             </form>
            </div>
            <div class="blank blank_wide">
              <div class="word-lines">
                  @foreach($users as $user)
                    @if($user['id'] == Auth::user()->id)
                      <div class="user-line me">
                        <div class="user__name me">{{$user['name']}}</div>
                        @if($user['isAdmin'])
                          <div class="user__status">admin</div>
                        @else
                          <div class="user__status">student</div>
                        @endif
                        <div class="user__name">{{$user['email']}}</div>
                      </div>
                    @else
                      <a class="user-line"  href="users/{{$user['id']}}">
                        <div class="user__name">{{$user['name']}}</div>
                        @if($user['isAdmin'])
                          <div class="user__status">admin</div>
                        @else
                          <div class="user__status">student</div>
                        @endif
                        <div class="user__name">{{$user['email']}}</div>
                      </a>
                    @endif
                  @endforeach
                </div>
            </div> 
            <div class="workspace__pagination">
              {!! $users->links();!!}
            </div>        
        </div>
    </main>  
@endsection