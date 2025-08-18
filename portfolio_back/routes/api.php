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
    ->only(['index', 'show'])
    ->parameter('home', 'home');

Route::apiResource('/about', AboutController::class)
    ->only(['index', 'show'])
    ->parameter('about', 'about');

Route::apiResource('/projects', ProjectController::class)
    ->only(['index', 'show'])
    ->parameter('projects', 'project');

Route::apiResource('/software-skills', SoftwareSkillController::class)
    ->only(['index', 'show'])
    ->parameter('software-skills', 'software-skill');

Route::apiResource('/languages', LanguageController::class)
    ->only(['index', 'show'])
    ->parameter('languages', 'language');

Route::apiResource('/soft-skills', SoftSkillController::class)
    ->only(['index', 'show'])
    ->parameter('soft-skills', 'soft-skill');

Route::apiResource('/focus-areas', FocusAreaController::class)
    ->only(['index', 'show'])
    ->parameter('focus-areas', 'focus-area');

Route::apiResource('/hobbies', HobbyController::class)
    ->only(['index', 'show'])
    ->parameter('hobbies', 'hobby');

Route::apiResource('/experiences', ExperienceController::class)
    ->only(['index', 'show'])
    ->parameter('experiences', 'experience');

Route::apiResource('/socials', SocialController::class)
    ->only(['index', 'show'])
    ->parameter('socials', 'social');
