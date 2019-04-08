<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UnitResource;
use App\Unit;

class UnitController extends Controller
{
    public function index()
    {
       
        return UnitResource::collection(Unit::all());

    }

    public function show(Unit $units)
    {
      return new UnitResource($units);
    }
}
