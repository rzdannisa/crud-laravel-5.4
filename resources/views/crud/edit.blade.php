@extends('master')
@section('content')

<div class="row">
    <form method="POST" action="{{action('CRUDController@update', $id)}}" class="col s12">
      <div class="row">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="input-field col s12">
          <input name="title" placeholder="Title" id="title" type="text" class="validate" value="{{$crud->title}}">
          <label for="title"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="post" placeholder="Post" id="post" class="materialize-textarea">{{$crud->post}}</textarea>
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
