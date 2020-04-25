@if(count($errors) > 0)
    <div class="alert alert_danger active">
      <ul>
        <strong>Errors:</strong>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(Session::has('success'))
    <div class="alert alert_success  active">
      <storng>Success:</strong> {{Session::get('success')}}
    </div>
  @endif

  <script type="text/javascript" src="{{asset('js/alert.js')}}"></script>