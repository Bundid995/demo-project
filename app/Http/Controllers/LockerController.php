<?php

namespace App\Http\Controllers;

use App\Locker;
use Illuminate\Http\Request;
use App\Http\Resources\LockerResource;

class LockerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //  return new LockerResource($locker)
        //  return LockerResource::collection($this->locker);
        return LockerResource::collection(Locker::all());
        // return LockerResource::collection(Locker::with('units'));
    }

    // public function store(Request $request)
    // {
    //     // returns validated data as array
    //     $data = $request->validate(['name' => 'required|between:2,20']);

    //     // merge with the current user ID
    //     $data = array_merge($data, ['user_id' => auth()->user()->id]);

    //     $project = Project::create($data);

    //     return $project ? array_merge($project->toArray(), ['timers' => []]) : false;
    // }
    public function show(Locker $locker)
    {
      return new LockerResource($locker);
    }
}
