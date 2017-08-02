@extends('master')
@section('content')

<table class="striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Post</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php $i=1; ?>
    @foreach($cruds as $post)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$post['title']}}</td>
      <td>{{$post['post']}}</td>
      <td><a href="{{action('CRUDController@edit',$post['id'])}}" class="waves-effect waves-light btn">Edit</a></td>
      <td>
        <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="return confirm('Are you sure want to delete?')" class="waves-effect waves-light btn">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>

</table>

@endsection
