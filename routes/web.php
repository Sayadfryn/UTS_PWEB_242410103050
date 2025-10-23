<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('landing');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard-hewan', [Controller::class, 'dashboardHewan'])->name('dashboardHewan');
Route::get('/add-hewan', [Controller::class, 'addHewan'])->name('addHewan');
Route::post('/add-hewan', [Controller::class, 'postAddHewan'])->name('postAddHewan');
Route::get('/view-hewan/{id}', [Controller::class, 'viewHewan'])->name('viewHewan');
Route::get('/edit-hewan/{id}', [Controller::class, 'editHewan'])->name('editHewan');
Route::post('/edit-hewan/{id}', [Controller::class, 'postEditHewan'])->name('postEditHewan');
Route::get('/delete-hewan/{id}', [Controller::class, 'deleteHewan'])->name('deleteHewan');
Route::get('/dashboard-pakan', [Controller::class, 'dashboardPakan'])->name('dashboardPakan');
Route::get('/add-pakan', [Controller::class, 'addPakan'])->name('addPakan');
Route::post('/add-pakan', [Controller::class, 'postAddPakan'])->name('postAddPakan');
Route::get('/edit-pakan/{id}', [Controller::class, 'editPakan'])->name('editPakan');
Route::post('/edit-pakan/{id}', [Controller::class, 'postEditPakan'])->name('postEditPakan');
Route::get('/delete-pakan/{id}', [Controller::class, 'deletePakan'])->name('deletePakan');
Route::get('/dashboard-obat', [Controller::class, 'dashboardObat'])->name('dashboardObat');
Route::get('/add-obat', [Controller::class, 'addObat'])->name('addObat');
Route::post('/add-obat', [Controller::class, 'postAddObat'])->name('postAddObat');
Route::get('/edit-obat/{id}', [Controller::class, 'editObat'])->name('editObat');
Route::post('/edit-obat/{id}', [Controller::class, 'postEditObat'])->name('postEditObat');
Route::get('/delete-obat/{id}', [Controller::class, 'deleteObat'])->name('deleteObat');
Route::get('/profile', [Controller::class, 'profile'])->name('profile');
Route::get('/edit-profile', [Controller::class, 'editProfile'])->name('editProfile');
Route::post('/edit-profile', [Controller::class, 'postEditProfile'])->name('postEditProfile');