<?php

namespace App\Http\Controllers;
use App\Car;
use App\Category;
use App\Dealer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($cat,$car_id){
        $item = Car::where('id', $car_id)->first();
        //dd($item);
        return view('show',[
            'item'=>$item
        ]);
    }
    public function showcategcar($category){
        $category= Category::where('title', $category)->first();
        //dd($item);
        return view('cars',[
            'category'=>$category
        ]);
    }
    public function dealers(){
        $dealer= Dealer::all();
        //dd($item);
        return view('dealer',[
            'dealer'=>$dealer
        ]);
    }
    public function orders($car_id){
        $car= Car::where('id', $car_id)->first();
        //dd($item);
        return view('order',[
            'car'=>$car
        ]);
    }   
}
