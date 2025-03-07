<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;

// Ruta principal redirigida al listado de oficinas
Route::get('/', [OficinaController::class, 'index'])->name('home');

// Rutas explícitas para oficinas
Route::get('/oficinas', [OficinaController::class, 'index'])->name('oficinas.index');
Route::get('/oficinas/create', [OficinaController::class, 'create'])->name('oficinas.create');
Route::post('/oficinas', [OficinaController::class, 'store'])->name('oficinas.store');
Route::get('/oficinas/{oficina}', [OficinaController::class, 'show'])->name('oficinas.show');
Route::get('/oficinas/{oficina}/edit', [OficinaController::class, 'edit'])->name('oficinas.edit');
Route::put('/oficinas/{oficina}', [OficinaController::class, 'update'])->name('oficinas.update');
Route::delete('/oficinas/{oficina}', [OficinaController::class, 'destroy'])->name('oficinas.destroy');

// Rutas explícitas para empleados (relacionadas con oficinas)
Route::get('/oficinas/{oficina}/empleados', [EmpleadoController::class, 'index'])->name('oficinas.empleados.index');
Route::get('/oficinas/{oficina}/empleados/create', [EmpleadoController::class, 'create'])->name('oficinas.empleados.create');
Route::post('/oficinas/{oficina}/empleados', [EmpleadoController::class, 'store'])->name('oficinas.empleados.store');
Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
