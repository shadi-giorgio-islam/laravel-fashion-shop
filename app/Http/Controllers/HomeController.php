<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
  public function index(){
    return view('home');
  }
  public function shop(){
    $dati = Dress::all();
    dd($dati);
    return view('shop');
  }
  public function about(){
    return view('about');
  }
}
