<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index(){
        // $jawaban = JawabanModel::get_all();
    
        return view('jawaban.index');
    }
}
