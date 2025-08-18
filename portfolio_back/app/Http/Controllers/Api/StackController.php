<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StackResource;
use App\Models\Stack;

class StackController extends Controller
{
    public function index()
    {
        return StackResource::collection(Stack::all());
    }

    public function show(Stack $stack)
    {
        return new StackResource($stack);
    }
}
