<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        /* 
        $data = [
            'nama_kategori' => 'Snack/Makanan Ringan',
            'deskripsi' => 'Kategori untuk makanan ringan',
            'created_at' => now(),
            'updated_at' => now()
        ];

        DB::table('m_kategori')->insert($data);
        echo 'Insert data baru berhasil<br>';
        */

        // 
        // $row = DB::table('m_kategori')
        //     ->where('nama_kategori', 'Snack/Makanan Ringan')
        //     ->update(['nama_kategori' => 'Camilan']);
        // echo 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris<br>';
        //

       /* $row = DB::table('m_kategori')
        ->where('nama_kategori', 'Snack/Makanan Ringan')
        ->update(['nama_kategori' => 'cemilan']);
    
    

        $data = DB::table('m_kategori')->get();

        return view('kategori', [
            'data' => $data,
            'message' => 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris'
        ]);*/
       // $row = DB::table('m_kategori')->where('nama_kategori', 'SNK')->delete();
       // return 'Delete data berhasil. jumlah data yang di hapus' . $row.' baris';

       $data = DB::table('m_kategori')->get();
       return view('kategori', ['data' => $data]);

    }
}
