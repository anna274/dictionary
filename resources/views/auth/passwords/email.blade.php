@extends('layouts.default')
@section('content')

        <div class="autho autho__log-in">
            <div class="layout-2-column">
                <img class="autho__img" src="../assets/img/reset.png">
                <div class="autho__info-area">
                    <h3 class="autho__header">Reset password</h3>
                    <p class="autho__comment">Enter your email and we'll send you a message with link</p>
                    <form method="POST" action="{{ route('password.email') }}" class="autho__form">
                        @csrf
                        <div class="input">
                            <span class="ico input__ico ico-user"></span>
                            <input id="email" type="email" class="input__text" name="email" placeholder="E-mail" required>
    
                        </div>        

                        <button type="submit" class="button">Send message</button>
                    </form>
                    <div class="autho__links center">
                        <a href="/login">I remember password!!!</a>
                        <a href="/">Go home</a>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection
