<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;


Route::get("/", [homeController::class, "index"])->name("index");
Route::get("/resume", [ResumeController::class, "index"])->name("resume");
Route::get("/contact", [ContactController::class, "index"])->name("contact");
Route::get("/project", [ProjectController::class,"index"])->name("project");