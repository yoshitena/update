<?php

namespace App\Http\Controllers;
// Carbonを読み込む
use Carbon\Carbon;

class TimeController extends Controller
{
  public function index(){
    $dt = Carbon::now(); // Carbonを使って今日の日付を取得
    $times = [
      "Today" => $dt,
    ];
    return view('time', ['times' => $times]);
  }
}