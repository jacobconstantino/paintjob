<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\paintjob;
class paintjobcontroller extends Controller
{
    public function newpaintjob(Request $request){

    	$paintjob = paintjob::firstOrCreate([
    	'plat' => $request->get('plate'),
        'current' => $request->get('colord'),
        'target' => $request->get('colorn')
        
    	]);


    	$paintjob->save();

    	  return view('welcome');

    }


    public function paintjob(){

    	$paintjob = paintjob::all();


    	return view('paintjobs',compact('paintjob'));
    }


    public function updateaction(){
        
    }
}
