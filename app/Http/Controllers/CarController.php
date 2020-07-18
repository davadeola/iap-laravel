<?php

namespace App\Http\Controllers;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //

    public function allcars(){

        $cars = Car::all();
        return view('allcars', ['cars' => $cars]);
    }

    public function particularcar()
    {
       // $car = Car::find($id);

    }

    public function newcarform()
    {
        return view('newcarform');
    }


    public function newcar(Request $request)
    {

        $this->validate($request,[
            'make'=>'required | unique:cars',
            'model'=>'required | unique:cars',
            'produced_on'=>'required | unique:cars'
        ]);

        $car = new Car;
        $car->model = request('model');
        $car->make = request('make');
        $car->produced_on = request('produced_on');
        $car->save();


        $request->session()->flash('form-status', 'Form Submission was successful');
        return redirect('/new');
    }
}
