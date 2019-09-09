<?php

namespace App\Http\Controllers\Karakter;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Karakter;
use Illuminate\Http\Request;

class KarakterController extends Controller
{
   
    public function index()
    {   
       // $monster = DB::table('spc_monster')->get();
        $karakter = Karakter::orderBy('nama','ASC')->get();
        
        return view('karakter.index',compact('karakter'));
    }

    public function create()
    {   
        return view('karakter.create');
    }

    public function show(Karakter $karakter)
    {   

        return view('karakter.detail',compact('karakter'));
    }

    public function store(Request $request)
    {   

        // dd($request->all());
        if(!$request->avatar == null){
            $file = $request->file('avatar');
            $file_name = $file->getClientOriginalName();
            $file->move('data_file',$file->getClientOriginalName());
        }else{
            $file_name = "not-found.jpg";
        }
        
        //Validasi inputan
        $this->validate($request,[
            'nama' => 'required|min:2',
            'alias' => 'required|min:2',
            'spesies' => 'required|min:3',
            'kemampuan' => 'required|min:3',
            'deskripsi' => 'required|min:3'

        ]);
        //simpan ke database
        $karakter = new Karakter;

        $karakter->nama = $request->nama;
        $karakter->alias = $request->alias;
        $karakter->era = $request->era;
        $karakter->spesies = $request->spesies;
        $karakter->kemampuan = $request->kemampuan;
        $karakter->deskripsi = $request->deskripsi;
        $karakter->avatar = $file_name;

        $karakter->save();

        return redirect('karakter');
    }
}