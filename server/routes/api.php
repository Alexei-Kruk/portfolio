<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\SoftwareSkillController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\SoftSkillController;
use App\Http\Controllers\Api\FocusAreaController;
use App\Http\Controllers\Api\HobbyController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\SocialController;

Route::apiResource('/home', HomeController::class)
    ->only(['index'])
    ->parameter('home', 'home');

Route::apiResource('/about', AboutController::class)
    ->only(['index'])
    ->parameter('about', 'about');

Route::apiResource('/projects', ProjectController::class)
    ->only(['index', 'show'])
    ->parameter('projects', 'project');

Route::apiResource('/software-skills', SoftwareSkillController::class)
    ->only(['index']);

Route::apiResource('/languages', LanguageController::class)
    ->only(['index']);

Route::apiResource('/soft-skills', SoftSkillController::class)
    ->only(['index']);

Route::apiResource('/focus-areas', FocusAreaController::class)
    ->only(['index']);

Route::apiResource('/hobbies', HobbyController::class)
    ->only(['index']);

Route::apiResource('/experiences', ExperienceController::class)
    ->only(['index']);

Route::apiResource('/socials', SocialController::class)
    ->only(['index']);
