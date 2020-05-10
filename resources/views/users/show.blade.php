@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">User managment</h2>
                <p class="workspase__title-comment">Showing user information</p>
            </div>
            <div class="blank show-blank">
              <div class="return">
                <a href="/users">
                  <span class="ico ico-return"></span>
                </a>
              </div>
              <div class="user-show__item">
                <p class="description">Username:</p>
                <div class="user__name">{{$user['name']}}</div>
              </div>
              @if($user['isAdmin'])
                <div class="user-show__item">
                  <p class="description">Status:</p>
                  <div class="user__status">admin</div>
                </div>
              @else
                <div class="user-show__item">
                  <p class="description">Status:</p>
                  <div class="user__status">student</div>
                </div>
              @endif
              <div class="user-show__item">
                <p class="description">Email:</p>
                <div class="user__email">{{$user['email']}}</div>
              </div>
              <div class="user-show__item">
                <p class="description">Join at:</p>
                <div class="user__join">{{$user['created_at']}}</div>
              </div>

              <div class="options show-blank__options">
                @if($user['isAdmin'])
                  <a href="/users/{{$user['id']}}/change-status" class="button button_colored-yellow">Make student</a>
                @else
                  <a href="/users/{{$user['id']}}/change-status" class="button button_colored-yellow">Make admin</a>
                @endif
                <form action="/users/{{$user['id']}}/delete" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="button button_colored-pink">Delete user</button>               
                </form>
              </div> 
            </div>       
        </div>
    </main>  
@endsection