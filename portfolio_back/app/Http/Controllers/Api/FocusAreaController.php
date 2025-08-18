<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FocusAreaResource;
use App\Models\FocusArea;

class FocusAreaController extends Controller
{
    public function index()
    {
        return FocusAreaResource::collection(FocusArea::all());
    }

    public function show(FocusArea $focusArea)
    {
        return new FocusAreaResource($focusArea);
    }
}
