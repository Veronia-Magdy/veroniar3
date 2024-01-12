<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

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

    public function upload(Request $request){
      $file_extension = $request->image->getClientOriginalExtension();
      $file_name = time() . '.' . $file_extension;
      $path = 'assets/images';
      $request->image->move($path, $file_name);
      return 'Uploaded';
  }
  public function createSession(){
    session()->put('testSession' , 'my first session value');
    return 'session created' . session('testSession');
  }
  public function contact_mail_send(Request $request)
  {
    Mail::to('vm@gmail.com')->send(new ContactMail($request));
    return redirect('conntact') ;
  }
}
