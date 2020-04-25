@extends('layouts.default')
@section('content')

        <div class="autho autho__log-in">
            <div class="layout-2-column">
                <img calss="autho__img" src="assets/img/log-in.png">
                <div class="autho__info-area">
                    <h3 class="autho__header">Log In</h3>
                    <form method="POST" action="{{ route('login') }}" class="autho__form">
                        @csrf

                        <div class="input">
                            <span class="ico input__ico ico-user"></span>
                            <input id="email" type="email" class="input__text" name="email" placeholder="E-mail" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input">
                            <span class="ico input__ico ico-lock"></span>
                            <input class="input__text" id="password" type="password" name="password" placeholder="Password" required>
                        </div>   
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror          

                        <a href="#">Forgot password?</a>
                        <button type="submit" class="button">Log in</button>
                    </form>
                    <div class="autho__links">
                        <a href="/sign-up">Create an account</a>
                        <a href="/">Go home</a>
                    </div>
                    
                </div>
            </div>
        </div>

@endsection
