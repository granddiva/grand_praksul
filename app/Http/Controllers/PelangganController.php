<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan; // ← WAJIB

class PelangganController extends Controller
{
    public function store(Request $request)
    {
        // Debug (jika sebelumnya ada, COMMENT atau HAPUS)
        // dd($request->all());

        $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;

        Pelanggan::create($data);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Penambahan Data Berhasil');
    }
}

class PelangganController extends Controller
{
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    // method lain: create(), store(), dll
}
