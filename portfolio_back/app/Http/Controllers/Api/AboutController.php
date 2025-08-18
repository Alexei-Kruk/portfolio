<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return AboutResource::collection(About::all());
    }

    public function show(About $about)
    {
        return new AboutResource($about);
    }
}
