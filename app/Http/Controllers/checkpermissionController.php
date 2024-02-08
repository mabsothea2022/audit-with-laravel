<?php

namespace App\Http\Controllers;

use App\Models\customerModel;
use Illuminate\Http\Request;

class checkpermissionController extends Controller
{
    public function index(){
        $data=customerModel::all();
        return view('Customer-View.front',compact('data'));
    }

    // public function create(){s
    //     return view('Customer-View.add');
    // }
    public function store(Request $request){
        $this->validate($request,[
            'customer_name'=>'required',
            'address'=>'required',
            'updated_at'=>'required',
            'created_at'=>'required',
        ]);
        customerModel::create($request->all());
        return redirect()->back();
    }

    public function destroy($id){
        customerModel::find($id)->delete();
        return redirect()->back();
    }
}
