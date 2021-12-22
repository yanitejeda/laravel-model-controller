<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class movieController extends Controller{
    //

    function index(){
        $data = movie::all();
       return $data; 
    }
}
