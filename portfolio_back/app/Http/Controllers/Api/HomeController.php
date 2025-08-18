<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        return HomeResource::collection(Home::all());
    }

    public function show(Home $home)
    {
        return new HomeResource($home);
    }
}
