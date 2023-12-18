<?php

use Illuminate\Support\Facades\Route;
use App\Models\tasks;
use App\Http\Controllers\edit;
use App\Http\Controllers\projects;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tasks = tasks::all()->sortBy('priority');
    $project = tasks::all()->groupBy('project');
    return view('welcome', compact('tasks', 'project'));
});
Route::controller(edit::class)->group(function (){
    Route::get('/edit/{id}', [edit::class, 'edit'])->name('edit.edit');
    Route::PUT('/update/{id}', [edit::class, 'update'])->name('edit.update');
    Route::get('/new', [edit::class, 'new'])->name('edit.new');
    Route::get('/insert_new', [edit::class, 'insert_new'])->name('edit.insert_new');
    Route::get('/delete/{id}', [edit::class, 'delete'])->name('edit.delete');
});
Route::controller(projects::class)->group(function (){
    Route::get('/projects/{project}', [projects::class, 'show'])->name('project.show');
});
