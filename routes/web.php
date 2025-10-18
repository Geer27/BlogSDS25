<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaController;
use app\controllers\InfoController;
use app\controllers\VisitaController;

/**
 * Archivo de rutas - Define todas las rutas de la aplicación
 * Blog Semana de Sistemas 2025
 */

// ============================================
// PÁGINA DE INICIO
// ============================================
Route::get("/", [HomeController::class, "index"]);


// ============================================
// RUTAS DE LOS DÍAS DEL EVENTO
// ============================================
Route::get("/dia/1", [DiaController::class, "dia1"]);
Route::get("/dia/2", [DiaController::class, "dia2"]);
Route::get("/dia/3", [DiaController::class, "dia3"]);
Route::get("/dia/4", [DiaController::class, "dia4"]);
Route::get("/dia/5", [DiaController::class, "dia5"]);


// ============================================
// INFORMACIÓN PERSONAL
// ============================================
Route::get("/mi-info", [InfoController::class, "index"]);


// ============================================
// FORMULARIO DE VISITAS
// ============================================
Route::get("/visitas", [VisitaController::class, "formulario"]);
Route::post("/visitas/registrar", [VisitaController::class, "registrar"]);

Route::get("/api/visitas", [VisitaController::class, "listar"]);


Route::dispatch();
?>
