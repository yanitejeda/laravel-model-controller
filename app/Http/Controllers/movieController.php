<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class movieController extends Controller{
    //

    function index(){
        $data = movie::all();
        /*   return $data; 
        */

        dump($data);
      /*  return view("movie.index"); */
      return view("movie",$data);
    }
}
