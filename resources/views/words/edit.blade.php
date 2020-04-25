@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Dictionary Managment</h2>
                <p class="workspase__title-comment">Creating new word</p>
            </div>
            <div class="blank">
              <form class="form" method="POST" action="{{route('words.update', $word['id'])}}">
                @csrf
                @method('PUT')
                <div class="form__item">
                  <label for="expression" class="label">Word  </label>
                    <input id="expression" name="expression" class="input" type="text" placeholder="Enter expression" value="{{$word['expression']}}">
                </div>
                <div class="form__item">
                  <label for="meaning" class="label">Meaning  </label>
                    <input id="meaning" name="meaning" class="input" type="text" placeholder="Enter meaning" value="{{$word['meaning']}}">
                </div>
                <div class="form__item">
                  <label for="example" class="label">Example  </label>
                    <input id="example" name="example" class="input" type="text" placeholder="Enter example" value="{{$word['example']}}">
                </div>
                <div class="form__item">
                  <button type="submit" class="button button_colored-pink">Save changes</button>
                </div>
              </form>
            </div>         
        </div>
    </main>  
@endsection