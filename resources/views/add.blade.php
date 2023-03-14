@extends("layouts.default")
<style></style>

@section("title" , "add.blade.php")

@section("content")
@if(count($errors) > 0)
<ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form action="add" method="POST">
<table>
  @csrf
  <tr>
    <th>name</th>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <th>age</th>
    <td><input type="text" name="age"></td>
  </tr>
  <tr>
    <th>nationality</th>
    <td><input type="text" name="nationality"></td>
  </tr>
  <tr>
    <th></th>
    <td><button>送信する</button></td>
  </tr>
</table>
</form>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>

  @foreach($authors as $author)
  <tr>
    <td>{{$author->id}}</td>
    <td>{{$author->name}}</td>
    <td>{{$author->age}}</td>
    <td>{{$author->nationality}}</td>
  </tr>
  @endforeach
</table>


@endsection