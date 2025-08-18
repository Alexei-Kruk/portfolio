<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HobbyResource;
use App\Models\Hobby;

class HobbyController extends Controller
{
    public function index()
    {
        return HobbyResource::collection(Hobby::all());
    }

    public function show(Hobby $hobby)
    {
        return new HobbyResource($hobby);
    }
}
