<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

use Illuminate\Support\Facades\Hash, Validator;

class AuthController extends Controller
{

    public function index()
    {
        return view('create');
    }
    public function create(Request $request)
    {
        // $val = Validator::make($request->all(),[
        //     'name' => 'required|string|',
        //     'email' => 'required|string|unique:register|',
        //     'password' => 'required|string|confirmed',
        // ]);
        // if($val->fails())
        // {
        //     return redirect()->back();
        // }
        // else
        // {
            $reg = new Register;
            $reg->name = $request->name;
            $reg->email = $request->email;
            $reg->password = Hash::make($request->password);
            $reg->save();
            flash("Successfully Created The Data",'success');
            return redirect()->back();
        // }
    }
    public function show()
    {
        $register = Register::all();
        return view('show',compact('register'));
    }
    public function edit($id)
    {
dd("asdsada");
    }
    public function delete($id)
    {
        Register::where('id',$id)->delete();
        flash("Successfully Delete The Data",'success');
        return redirect()->back();
    }
}