<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
        {
            return response()->json(Jobs::all(),200);
        }

        public function store(Request $request)
        {
            $jobs = Jobs::create([
                'nama_perusahaan' => $request->nama_perusahaan,
                'nama_pekerjaan' => $request->nama_pekerjaan,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'nama_pengguna' => $request->nama_pengguna
            ]);

            return response()->json([
                'status' => (bool) $jobs,
                'data'   => $jobs,
                'message' => $jobs ? 'Pekerjaan berhasil ditambahkan!' : 'Pekerjaan Gagal Ditambahkan'
            ]);
        }

        public function show(Jobs $jobs)
        {
            return response()->json($jobs,200); 
        }

        

        public function update(Request $request, Jobs $jobs)
        {
            $status = $jobs->update(
                $request->only(['nama_perusahaan', 'nama_alamat', 'alamat', 'no_telp', 'email', 'nama_pengguna'])
            );

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Pekerjaan Berhasil di Update!' : 'Pekerjaan Gagal Diupdate'
            ]);
        }

       

        public function destroy(Jobs $jobs)
        {
            $status = $jobs->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Pekerjaan Berhasil Dihapus!' : 'Pekerjaan Gagal Dihapus'
            ]);
        }

}
