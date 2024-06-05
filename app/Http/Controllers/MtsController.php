<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MtsController extends Controller
{
    public function dashboard()
    {     
        return view('guest/dashboard');
    }

    public function visiMisi()
    {     
        return view('guest/visi-misi');
    }

    public function guruStaff()
    {     
        $data['dataGuru'] = DB::table('tabel_guru')->get();
        return view('guest/guru-staff',$data);

    }
    public function berita()
    {     
        $data['dataBerita'] = DB::table('tabel_berita')->get();
        return view('guest/berita' , $data);
    }

    public function contact()
    {     
        return view('guest/contact');
    }
}
