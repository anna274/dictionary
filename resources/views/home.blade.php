@extends('layouts.default')
@section('content')
    <nav class="dropdown">
        <li class="menu-item drop">
            <div class="menu_img">
                <img class="ico" src="{{ Auth::user()->photoUrl }}">
            </div>
            <a href="/home">{{ Auth::user()->name }}</a>
        </li>
            <ul class="dropdown-content">
                <li class="menu-item">
                    <div class="menu_img">
                    <span class="ico ico-dictionary"></span>
                    </div>
                    <a href="/words">My dictionary</a>
                </li>
                <li class="menu-item">
                    <div class="menu_img">
                    <span class="ico ico-edit"></span>
                    </div>
                    <a href="/users/{{Auth::user()->id}}">Edit profile</a>
                </li>
                <li class="menu-item">
                    <div class="menu_img">
                        <span class="ico ico-logout"></span>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <button type="submit">Logout</button>
                        @csrf
                    </form>
                </li>
            </ul>
    </nav>
    <main class="lilium-background">
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">My account</h2>
            </div>
            <div class="my-account blank">
                <div class="my-account__intro">
                    <div class="my-account__img">
                        <img src="{{ Auth::user()->photoUrl }}">
                    </div>
                    <div class="my-account__intro__text">
                        <h3 class="my-account__name">{{ Auth::user()->name }} </h3>
                        @if (Auth::user()->isAdmin)
                            <p class="my-account__role">Admin</p>
                        @else
                            <p class="my-account__role">Student</p>
                        @endif
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </main>  
@endsection
