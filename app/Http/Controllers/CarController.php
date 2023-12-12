<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Post;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $cars = Car::get();
        //return view ('cars' , compact('cars'));
        $posts = Post::get();
        return view ('posts' , compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars = new Car();
        $cars->title = $request->title;
        $cars->description = $request->Description;
        if(isset($request->Published)){
        $cars->Published = 1;
       }else{
        $cars->Published = 0;
       }

        $cars->save();
        return "Data Added Successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
