<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function show($id){
        return view('welcome');

    }
}
