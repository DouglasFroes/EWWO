<?php

  namespace App\Http\Controllers;

  class MainController extends Controller{

    public function home(){
      return view('home2');
    }
    public function valores(){
      return view('pricing');
    }

  }
?>