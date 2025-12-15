<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        // ✅ VALIDASI DATA
        $request->validate([
            'nama'       => 'required|max:10',
            'email'      => ['required', 'email'],
            'pertanyaan' => 'required|min:8|max:300',
        ]);

        // (sementara untuk tugas, belum simpan DB)
        return back()->with('success', 'Pertanyaan berhasil dikirim');
    }
}
