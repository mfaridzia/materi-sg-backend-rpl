<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        echo "Dari controller test!";
    }

    public function form() {
        return view('form');
    }

    public function prosesForm(Request $request) {

        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $nama = $request->nama;
        $alamat = $request->alamat;
        
        return view('form', ['nama' => $nama, 'alamat' => $alamat]);
    }

}
