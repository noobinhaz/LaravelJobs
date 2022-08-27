<?php

use \App\Models\Listings;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listingControl;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * Common resource routes
 * index - show all Listings
 * show - show single listings
 * create - show form to create new listings
 * store - store new listing
 * edit - show form to edit existing listing
 * update - update listing
 * destroy - destroy listing
 */
//all the listings
Route::get('/', [listingControl::class, 'index']);

//create page
Route::get('/listings/create',[listingControl::class, 'create']);

//store data from create form
Route::post('/listings',[listingControl::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [listingControl::class, 'edit']);

//Update Editted Form
Route::put('/listings/{listing}/',[listingControl::class, 'update']);

//Delete a listing
Route::delete('/listings/{listing}/',[listingControl::class, 'delete']);

//single listing
Route::get('/listings/{listing}',[listingControl::class, 'show']);

//user registration
Route::get('/register', [userControl::class, 'create']);

//create user
Route::post('/users', [userControl::class, 'store']);

//login users
Route::post('/users/authenticate', [userControl::class, 'authenticate']);

//Logout
Route::post('/logout', [userControl::class, 'logout']);

//login form
Route::get('/login', [userControl::class, 'login']);