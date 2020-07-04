<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\JawabanModel;

class JawabanControllerl extends Controller
{
    //
    public function create(){
        return view('jawaban.form');
    }

    public function store(Request $request){
        $new_jawaban = JawabanModel::save($request->all());
        return redirect('/jawaban');

    }

    public function index() {
        $jawaban = JawabanModel::get_all();
        return view('jawaban.index');

    }
}
