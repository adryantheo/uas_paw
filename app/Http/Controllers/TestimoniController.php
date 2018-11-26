<?php

namespace App\Http\Controllers;
use App\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        return response()->json(Jobs::all(),200);
    }

    public function store(Request $request)
    {
        $testimoni = Testimoni::create([
            'namaT' => $request->namaT,
            'pesan' => $request->pesan
            
        ]);

        return response()->json([
            'status' => (bool) $jobs,
            'data'   => $jobs,
            'message' => $jobs ? 'Pekerjaan berhasil ditambahkan!' : 'Pekerjaan Gagal Ditambahkan'
        ]);
    }

    public function show(Testimoni $testimoni)
    {
        return response()->json($jobs,200); 
    }

    

   
   
}
