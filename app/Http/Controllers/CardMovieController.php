<?php

namespace App\Http\Controllers;
use App\movie;


use Illuminate\Http\Request;

class CardMovieController extends Controller
{
    //
    function index(){

        $data = movie::all();

        
        return view('cardmovie',[
            "lista_movie"=> $data
        ]);
    }
}
