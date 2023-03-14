@extends("layouts.default")
<style>
  th{
    padding: 5px 20px;
    background-color: blue;
    color: #000;
    }
    td{
      margin: 25px 40px;
      text-align: center;
      color: yellow;   
       }
</style>
@section("title" , "find.blade.php")

@section("content")
<form action="find" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>

@if(@isset($author))
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <tr>
    <td>{{$author->id}}</td>
    <td>{{$author->name}}</td>
    <td>{{$author->age}}</td>
    <td>{{$author->nationality}}</td>
  </tr>
</table>
@endif
@endsection