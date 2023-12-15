<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
return Inertia::render("Home");
});

Route::get('/agent-form', function () {
return Inertia::render("AgentForm");
})->name('agent-form');



Route::post('/add-agent', [AgentController::class, 'addAgent'])->name('add-agent');
Route::post('/add-property', [PropertyController::class, 'addProperty'])->name('add-property');
Route::get('/get-agents', [AgentController::class, 'getAgents']);
Route::put('/edit-agent/{id}', [AgentController::class, 'editAgent']);
Route::delete('/delete-agent/{id}', [AgentController::class, 'deleteAgent']);





Route::get('/property-form', function () {
return Inertia::render("PropertyForm");
})->name('property-form');

Route::post('/add-property', function () {

})->name('add-property');

Route::get('/search-properties', function () {
return Inertia::render("SearchProperties");
})->name('search-properties');

Route::post('/search-properties', function () {

})->name('handle-search-properties');

Route::get('/property-list', function () {
return Inertia::render("PropertyList");
})->name('property-list');

Route::post('/delete-property/{id}', function ($id) {

})->name('delete-property');
