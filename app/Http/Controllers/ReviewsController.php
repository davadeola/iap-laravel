<?php

namespace App\Http\Controllers;
use App\Car;
use App\Review;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function allreview()
    {
        $id = request('car');
        // $car = Car::find($id);
        $reviews = Review::where('car', $id)->get();
        return view('carreview', ['reviews' => $reviews]);
    }

    public function show(){

        $reviews = Review::all();
        return view('reviews', ['reviews' => $reviews]);
    }

    public function cardetails($id){

        $review = Review::where('id', $id)->get();
        // $car = Car::where('id', $review->id)->get();
        return view('carreview', ['reviews' => $review]);
    }
}
