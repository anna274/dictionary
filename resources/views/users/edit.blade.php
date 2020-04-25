@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Profile settings</h2>
            </div>
            <div class="blank">
              <form class="form" method="POST" action="{{route('users.update', $user)}}">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="form__item">
                  <label for="name" class="label">Uresname</label>
                    <input id="name" name="name" class="input" type="text" placeholder="Usernamen" value="{{ $user->name }}">
                </div>
                <div class="form__item">
                  <label for="email" class="label">Email</label>
                    <input id="email" name="email" class="input" type="email" placeholder="Email" value="{{ $user->email }}">
                </div>
                <div class="form__item">
                  <label for="photoUrl" class="label">Profile photo URL</label>
                    <input id="photoUrl" name="photoUrl" class="input" type="text" placeholder="Photo URL" value="{{ $user->photoUrl }}">
                </div>
                <div class="form__item">
                  <button type="submit" class="button button_colored-pink">Save changes</button>
                </div>
              </form>
            </div>         
        </div>
</main>  
@endsection