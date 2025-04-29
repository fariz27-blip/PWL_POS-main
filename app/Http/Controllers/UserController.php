<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'pelanggan pertama',
        ];

        // Lakukan update berdasarkan username
        $update = UserModel::where('username', 'customer-1')->update($data);

        // Ambil semua data user setelah update
        $user = UserModel::all();

        // Kirim data dan status update ke view
        return view('user', [
            'data' => $user,
            'updateStatus' => $update ? 'Data berhasil diupdate.' : 'Data tidak ditemukan atau gagal update.',
        ]);
    }
}
