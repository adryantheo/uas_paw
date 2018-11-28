<?php

namespace App\Http\Controllers;
use App\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        
        return Testimoni::all();
    }

    public function store(Request $request)
    {
        $testimoni = new Testimoni;
        $testimoni->namaT = $request->namaT;
        $testimoni->pesan = $request->pesan;

        $success = $testimoni->save();

        if(!$success){
            return response()->json('Error Saving',500);
        }else{
            return response()->json('Sukses',201);
        }
    }

 

    

   
   
}
