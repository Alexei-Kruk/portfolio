<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SocialResource;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        return SocialResource::collection(Social::all());
    }

    public function show(Social $social)
    {
        return new SocialResource($social);
    }
}
