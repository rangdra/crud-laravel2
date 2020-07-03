<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        
        return view('jawaban.index');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->isi;
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return redirect('/jawaban/{pertanyaan_id}');
        }
        
    }
}
