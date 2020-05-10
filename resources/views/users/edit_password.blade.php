@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Profile settings</h2>
                <p class="workspase__title-comment">Edit password</p>
            </div>
            <div class="blank">
              <form id="form-change-password" class="form" method="POST" action="/users/edit/password/update">
                {{ csrf_field() }}
                <div class="form__item">
                  <label for="current-password" class="label">Current password</label>
                    <input id="current-password" name="current-password" class="input" type="password">
                </div>
                <div class="form__item">
                  <label for="new-password" class="label">New password</label>
                    <input id="new-password" name="new-password" class="input" type="password">
                </div>
                <div class="form__item">
                  <label for="new-password-confirm" class="label">Repeat new password</label>
                    <input id="new-password-confirm" name="new-password-confirm" class="input" type="password">
                </div>
                <div class="form__item">
                  <button type="submit" class="button button_colored-pink">Change password</button>
                </div>
              </form>
            </div>         
        </div>
</main>  
@endsection