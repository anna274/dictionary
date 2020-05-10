@extends('layouts.default')
@section('content')
        <div class="autho autho__sign-up">
            <div class="layout-2-column">
                <img class="autho__img" src="assets/img/sign-up.png">
                <div class="autho__info-area">
                    <h3 class="autho__header">Sign Up</h3>
                    <form method="POST" action="{{ route('register') }}" class="autho__form">
                        @csrf
                        <div class="input">
                            <span class="ico input__ico ico-user"></span>
                            <input class="input__text" id="name" type="text" name="name" placeholder="Username" required>
                        </div>

                        <div class="input">
                            <span class="ico input__ico ico-user"></span>
                            <input class="input__text" id="email" type="email" name="email" placeholder="Email" required>
                        </div>
   
                        <div class="input">
                            <span class="ico input__ico ico-lock"></span>
                            <input class="input__text" id="password" type="password" name="password" placeholder="Password" required>
                        </div>    
  
                        <div class="input">
                            <span class="ico input__ico ico-lock2"></span>
                            <input class="input__text" id="password-confirm" type="password" name="password_confirmation" placeholder="Repeate your password" required>
                        </div>    

                        <button type="submit"  class="button">
                            Sign up
                        </button>
                    </form>
                    <div class="autho__links">
                        <a href="/login">I'm already member</a>
                        <a href="/">Go home</a>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
