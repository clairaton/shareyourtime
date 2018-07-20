<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     *  Just return the welcome view
     *  @return view 'welcome'
     */
  public function index()
  {
    return view('welcome');
  }
}
