<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TableSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function tableSiswa()
    {
        $data['dataSiswa'] = TableSiswa::all();
        return view('admin/table-siswa', $data);
    }

    public function storeSiswa(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        TableSiswa::create($validatedData);
        return redirect()->route('table-siswa')->with('success', 'Post created successfully!');
    }

    public function deleteSiswa(TableSiswa $post)
    {
        $post->delete();
        return redirect()->route('table-siswa');
    }

    public function updateSiswa(Request $request, TableSiswa $post)
    {
        $post->update($request->all());
        return redirect()->route('table-siswa');
    }

    public function tableGuru(){
        $data['dataGuru'] = DB::table('tabel_guru')->get();
        return view('admin/table-siswa', $data);
    }
}
