<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class DataController extends Controller
{
    public function data(){
        // return view('home')
        $portofolio = Portofolio::all();
        return view('data',compact(['portofolio']));
    }
    public function dashdata(){
        // return view('home')
        $portofolio = Portofolio::all();
        return view('dashboard',compact(['portofolio']));
    }
    public function insert(){
        // return view('home')
        $portofolio = Portofolio::all();
        return view('insert',compact(['portofolio']));
    }

}
