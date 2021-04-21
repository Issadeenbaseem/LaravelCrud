<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CityMemberController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberSpecializationController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\SpecializationVerticalController;
use App\Http\Controllers\VerticalController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//verticals

Route::get('/verticals',[VerticalController::class,'index']);
Route::post('/verticals',[VerticalController::class,'store']);
Route::get('/verticals/{vertical}/edit',[VerticalController::class,'edit']);
Route::put('/verticals/{vertical}',[VerticalController::class,'update']);
Route::get('/verticals/create',[VerticalController::class,'create']);
Route::delete('/verticals/{vertical}',[VerticalController::class,'destroy']);

//cities

Route::get('/cities',[CityController::class,'index']);
Route::post('/cities',[CityController::class,'store']);
Route::get('/cities/{city}/edit',[CityController::class,'edit']);
Route::put('/cities/{city}',[CityController::class,'update']);
Route::get('/cities/create',[CityController::class,'create']);
Route::delete('/cities/{city}',[CityController::class,'destroy']);


//cityMemebers

Route::get('/cityMembers',[CityMemberController::class,'index']);
Route::post('/cityMembers',[CityMemberController::class,'store']);
Route::get('/cityMembers/{cityMember}/edit',[CityMemberController::class,'edit']);
Route::put('/cityMembers/{cityMember}',[CityMemberController::class,'update']);
Route::get('/cityMembers/create',[CityMemberController::class,'create']);
Route::delete('/cityMembers/{cityMember}',[CityMemberController::class,'destroy']);

//Memebers

Route::get('/members',[MemberController::class,'index']);
Route::post('/members',[MemberController::class,'store']);
Route::get('/members/{member}/edit',[MemberController::class,'edit']);
Route::put('/members/{member}',[MemberController::class,'update']);
Route::get('/members/create',[MemberController::class,'create']);
Route::delete('/members/{member}',[MemberController::class,'destroy']);

//Districts

Route::get('/districts',[DistrictController::class,'index']);
Route::post('/districts',[DistrictController::class,'store']);
Route::get('/districts/{district}/edit',[DistrictController::class,'edit']);
Route::put('/districts/{district}',[DistrictController::class,'update']);
Route::get('/districts/create',[DistrictController::class,'create']);
Route::delete('/districts/{district}',[DistrictController::class,'destroy']);

//Specialization

Route::get('/specializations',[SpecializationController::class,'index']);
Route::post('/specializations',[SpecializationController::class,'store']);
Route::get('/specializations/{specialization}/edit',[SpecializationController::class,'edit']);
Route::put('/specializations/{specialization}',[SpecializationController::class,'update']);
Route::get('/specializations/create',[SpecializationController::class,'create']);
Route::delete('/specializations/{specialization}',[SpecializationController::class,'destroy']);

//SpecializationVarticals

Route::get('/specializationverticals',[SpecializationVerticalController::class,'index']);
Route::post('/specializationverticals',[SpecializationVerticalController::class,'store']);
Route::get('/specializationverticals/{specializationVertical}/edit',[SpecializationVerticalController::class,'edit']);
Route::put('/specializationverticals/{specializationVertical}',[SpecializationVerticalController::class,'update']);
Route::get('/specializationverticals/create',[SpecializationVerticalController::class,'create']);
Route::delete('/specializationverticals/{specializationVertical}',[SpecializationVerticalController::class,'destroy']);



//SpecializationVarticals

Route::get('/memberSpecializations',[MemberSpecializationController::class,'index']);
Route::post('/memberSpecializations',[MemberSpecializationController::class,'store']);
Route::get('/memberSpecializations/{memberSpecialization}/edit',[MemberSpecializationController::class,'edit']);
Route::put('/memberSpecializations/{memberSpecialization}',[MemberSpecializationController::class,'update']);
Route::get('/memberSpecializations/create',[MemberSpecializationController::class,'create']);
Route::delete('/memberSpecializations/{memberSpecialization}',[MemberSpecializationController::class,'destroy']);

