<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $new_pertanyaan = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');

    }

    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        //buatcek
        // dd($pertanyaan);
        return view('pertanyaan.index', ['pertanyaan'=>$pertanyaan]);

    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);

        return view('item.show',compact($pertanyaan));
    }
        
}
