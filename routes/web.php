<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/add', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);