<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{


	//public function properties()
    public function index()
	{
	$pro = Property::all();
                                                        //return view('properties')->with('pros', $pro);
    return view('index')->with('pros', $pro);
	}


}
