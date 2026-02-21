<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Models\Proyecto;

Route::get('/', function () {
    $projects = Proyecto::query()
        ->where('is_published', true)
        ->orderByDesc('featured')
        ->orderByRaw('orden IS NULL, orden ASC')
        ->latest()
        ->get();

    return view('home', compact('projects'));
})->name('home');

Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('/proyectos/{proyecto:slug}', [ProyectoController::class, 'show'])->name('proyectos.show');