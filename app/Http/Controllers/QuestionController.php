<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        // Ambil data dari form
        $nama = $request->nama;
        $email = $request->email;
        $pertanyaan = $request->pertanyaan;

        // Untuk tugas: tampilkan hasil (tidak error)
        return back()->with('success', 'Pertanyaan berhasil dikirim');
    }
}
