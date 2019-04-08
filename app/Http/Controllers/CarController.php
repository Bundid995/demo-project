<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function create()
    {
        return view('carcreate');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->guestname = $request->get('guestname');
        $car->password = $request->get('password');
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }

    public function update(Request $request, $id)
    {   
    $car= Car::find($id);
    $car->guestname = $request->get('guestname');
    $car->password = $request->get('password');
    $car->save();
    return redirect('car')->with('success', 'Car has been successfully update');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car')->with('success','Car has been  deleted');
    }

    public function index(Request $request)
{
    $cars = Car::where(function ($query) use ($request) {
        if($request->has('guestname')) {
          // dd($request->company);
          $query->where('guestname', 'LIKE', '%' . $request->guestname . '%');
          //$query->where('carcompany', $request->company);
        }
    })->orderBy('id', 'asc')->get();
    return view('carindex',['cars'=>$cars]);
}

    public function edit($id)
        {
            $car = Car::find($id);
            return view('caredit',compact('car','id'));
        }
    public function info($id)
    {
        $car = Car::find($id);
        return view('info',compact('car','id'));
    }

}
