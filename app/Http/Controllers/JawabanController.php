<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawaban = JawabanModel::get_all();
        // dd('$jawaban');
        return view('jawaban.index', compact('jawaban'));
        // return view('jawaban.index');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return redirect('/jawaban/{pertanyaan_id}');
        }
        
    }
}
