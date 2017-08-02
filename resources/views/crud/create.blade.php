@extends('master')
@section('content')

<div class="row">
    <form method="POST" action="{{url('crud')}}" class="col s12">
      <div class="row">
        {{csrf_field()}}
        <div class="input-field col s12">
          <input placeholder="Title" name="title" id="title" type="text" class="validate">
          <label for="title"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="post" id="post" placeholder="Post" class="materialize-textarea"></textarea>
          <label for="post"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="waves-effect waves-light btn">Save</button>
        </div>
      </div>
    </form>
  </div>

@endsection
