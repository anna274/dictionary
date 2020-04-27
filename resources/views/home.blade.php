@extends('layouts.default')
@section('content')
    @include('partials._menu')
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
