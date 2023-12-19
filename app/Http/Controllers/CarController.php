<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    private $columns = ['title','description','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view ('cars' , compact('cars'));
       // $posts = Post::get();
       // return view ('posts' , compact('posts'));

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
        //$cars = new Car();
        //$cars->title = $request->title;
        //$cars->description = $request->Description;
        //if(isset($request->Published)){
       // $cars->Published = 1;
       //}else{
        //$cars->Published = 0;
       //}

        //$cars->save();
        //return "Data Added Successfully";
        //$data = $request->only($this->columns);
       $data= $request->validate([
        'title' => 'required|string',
        'description' => 'required|string'
        ]);
        $data["published"] = isset($request->published);
        Car::create($data);
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Car = Car::findOrFail($id);
        return view('showCar', compact('Car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('updateCar', compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data["published"] = isset($request->published);
        Car::where('id',$id)->update($data);
        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();
        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trashed()
    {
        $cars = Car::onlyTrashed()->get();
        return view('trashed',compact('cars'));
    }

     /**
     * Remove the specified resource from storage.
     */
    public function forceDelete(string $id)
    {
        Car::where('id',$id)->forceDelete();
        return redirect('cars');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function restore(string $id)
    {
        Car::where('id',$id)->restore();
        return redirect('cars');
    }
}
