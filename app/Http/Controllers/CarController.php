<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
     public function show($cat,$car_id){
        $item = Car::where('id', $car_id)->first();
        dd($item);
        return view('show',[
            'item'=>$item
        ]);
    }
    public function showcategcar($category){
        $category= Category::where('title', $category)->first();
        //dd($item);
        return view('cars',[
            'item'=>$category
        ]);
    }
}
