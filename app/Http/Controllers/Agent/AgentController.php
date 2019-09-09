<?php

namespace App\Http\Controllers\Agent;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Scp_agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
   
    public function index()
    {   
        $agent = Scp_agent::all();
        
        return view('agent.index',compact('agent'));
    }

    public function create()
    {   
        return view('agent.create');
    }

    public function show(Scp_agent $agent)
    {   

        return view('agent.detail',compact('agent'));
    }

    public function store(Request $request)
    {   
        if(!$request->file == null){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move('data_file',$file->getClientOriginalName());
        }else{
            $file_name = "not-found.jpg";
        }
        
        //Validasi inputan
        $this->validate($request,[
            'name' => 'required|min:2',
            'alias' => 'required|min:2',
            'rank' => 'required',
            'class' => 'required'

        ]);
        //simpan ke database
        $agent = new Scp_agent;

        $agent->name = $request->name;
        $agent->alias = $request->alias;
        $agent->age = $request->age;
        $agent->class = $request->class;
        $agent->rank = $request->rank;
        $agent->skills = $request->skills;
        $agent->description = $request->description;
        $agent->file = $file_name;

        $agent->save();

        return redirect('agent');
    }
}