<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    $studentName = ['Alvon', 'Kevin', 'Jesse', 'Juan', 'Ezra'];
    $studentAge = [20, 10, 20, 20, 20];
    $studentSpeciality = ['AI', 'AI', 'AI', 'GD', 'GD'];
    $studentCampus = ['Binus Malang', 'Binus Malang', 'Binus Malang', 'Binus Malang', 'Binus Malang'];
    if($request->name){
        for($i = 0; $i < 5; $i++){
            if(strtolower($request->name) == strtolower($studentName[$i])){
                $studentName = explode('-', $studentName[$i]);
                $studentAge = explode('-', $studentAge[$i]);
                $studentSpeciality = explode('-', $studentSpeciality[$i]);
                $studentCampus = explode('-', $studentCampus[$i]);
                break;
            }
        }
    }
    return view('index')->with('studentName', $studentName)->with('studentAge', $studentAge)->with('studentSpeciality', $studentSpeciality)->with('studentCampus', $studentCampus);
});
Route::get('/ai', function () {
    $studentName = ['Alvon', 'Kevin', 'Jesse'];
    $studentAge = [20, 10, 20];
    $studentIpk = [2, 4, 4];
    return view('ai')->with('studentName', $studentName)->with('studentAge', $studentAge)->with('studentIpk', $studentIpk);
});
Route::get('/gd', function () {
    $studentName = ['Juan', 'Ezra'];
    $studentAge = [20, 20];
    $studentIpk = [4, 4];
    return view('gd')->with('studentName', $studentName)->with('studentAge', $studentAge)->with('studentIpk', $studentIpk);
});
