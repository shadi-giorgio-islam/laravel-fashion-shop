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
    $dati_dresses = Dress::all();
    $data = [
      'dresses' => $dati_dresses
    ];
    return view('shop', $data);
  }
  public function about(){
    return view('about');
  }
}
