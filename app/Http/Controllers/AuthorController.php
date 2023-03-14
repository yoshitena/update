<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;
  use App\Http\Requests\AuthorRequest;


class AuthorController extends Controller{

public function index(){
return view("find" ,["input" => ""]);
}
public function find(Request $request){
$author = Author::find($request->input);
$param = [
 "author" => $author,
 "input" => $request->input
];
return view("find",$param);
}
public function add(){
$authors = Author::all();
return view("add" , ["authors" => $authors]);
}

public function create(AuthorRequest $request){
  $form = $request->all();
  Author::create($form);
  return redirect("add");
}

public function  edit(Request $request){
 $author = Author::find($request->id);
 return view("edit" , ["form" => $author ]);
}

public function update(AuthorRequest $request){
  $form = $request->all();
  unset($form["_token"]);
  Author::where("id" , $request->id)->update($form);
  return redirect("edit");
}
}


