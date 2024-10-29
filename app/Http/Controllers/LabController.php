<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Lab;


class LabController extends Controller
{
    //
    public function index(){
        $labs = Lab::all();
        return view('lab.index', compact('labs'));
    }


    public function create(Request $request)
    {
        dd($request);
        $validator = Validator::make($request->all(), [
            'lab_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'state' => 'required|numeric',
            'district'=>'required|numeric',
            'mobile_number' => 'nullable|numeric|min:10',
            'postal_code' => 'required|numeric',
            'lab_address' => 'required',
            'password' => 'required',
        ]);
        return view('lab.index');
    }
}
