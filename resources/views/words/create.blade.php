@extends('layouts.default')
@section('content')
    <main class="lilium-background">
        @include('partials._menu')
        <div class="workspace">
            <div class="workspace__title-area">
                <h2 class="workspace__title">Creating new word</h2>
                <p class="workspase__title-comment">Do somethimg awesome</p>
            </div>
            <div class="blank">
              <form class="form" method="post" action="/words">
                @csrf
                <div class="form__item">
                  <label for="expression" class="label">Word  </label>
                    <input id="expression" name="expression" class="input" type="text" placeholder="Enter expression">
                </div>
                <div class="form__item">
                  <label for="meaning" class="label">Meaning  </label>
                    <input id="meaning" name="meaning" class="input" type="text" placeholder="Enter meaning">
                </div>
                <div class="form__item">
                  <label for="example" class="label">Example  </label>
                    <input id="example" name="example" class="input" type="text" placeholder="Enter example">
                </div>
                <div class="form__item">
                  <button type="submit" class="button button_colored-pink">Create word</button>
                </div>
              </form>
            </div>         
        </div>
    </main>  
@endsection