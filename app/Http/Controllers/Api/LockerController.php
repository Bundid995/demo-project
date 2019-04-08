<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LockerResource;
use App\Locker;

class LockerController extends Controller
{
    public function index()
    {
       
        return LockerResource::collection(Locker::all());

    }

    public function show(Locker $locker)
    {
      return new LockerResource($locker);
    }
}
