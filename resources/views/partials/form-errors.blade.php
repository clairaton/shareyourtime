<div class="alert alert-error">
@if(count($errors))
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
</div>
