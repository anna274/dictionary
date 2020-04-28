@extends('layouts.default')
@section('content')
    <body>
        <header class="header">
            <div class="header__wrapper">
                <h1 class="text_upper">Start learning<br> English now</h1>
                <div class="header__buttons">
                    <a href="/login" class="button button_bordered">Log in</a>
                    <a href="/register" class="button button_colored-pink">Sign up</a>
                </div>
            </div>
        </header>
        <main>
            <div class="intro">
                <div class="intro-item">
                    <img src="./assets/img/intro/books2.png" class="intro-img img_left-shadowed">
                    <div class="intro-item__description">
                        <h3 class="text_blue-colored">Who are we?</h3>
                        <p class="right-bordered">We are developers of this unique project that helps people learn English every day. It’s free, because we are learnig too searching interesting content for you))</p>
                    </div>
                </div>
                <div class="intro-item"> 
                    <div class="intro-item__description">
                        <h3 class="text_yellow-colored">How does it work?</h3>
                        <p class="left-bordered">We are developers of this unique project that helps people learn English every day. It’s free, because we are learnig too searching interesting content for you))</p>
                    </div>
                    <img src="./assets/img/intro/cube2.png" class="intro-img img_right-shadowed">
                </div>
                <div class="intro-item">
                    <img src="./assets/img/intro/fingers2.png" class="intro-img img_left-shadowed">
                    <div class="intro-item__description">
                        <h3 class="text_pink-colored">More practice</h3>
                        <p class="right-bordered">We are developers of this unique project that helps people learn English every day. It’s free, because we are learnig too searching interesting content for you))</p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="wrapper footer__wrapper">
                <h2 class="text_upper">Go up and never stop</h2>
                <div class="contacts">   
                    <h3>Contuct us:</h3>
                    <p class="contact">
                        <span class="ico contact__ico ico-phone"></span><a href="#">+375(44)750-17-36</a>                 
                    </p>
                    <p class="contact">
                        <span class="ico contact__ico ico-mail"></span><a href="#">anna_rusakovich.01@mail.ru</a>                 
                    </p>
                    <p class="contact_add-info">You can find code of this project <a href="#">here</a></p>
                </div> 
            </div>
        </footer>
    </body>
@endsection