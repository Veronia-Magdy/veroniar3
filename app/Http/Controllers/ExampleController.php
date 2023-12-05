<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function sh( )
    {
      return view('login');
    }
    public function show(Request $request)
    {
        return $request->all();
    } 
}
