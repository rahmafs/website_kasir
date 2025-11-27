<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() //fungsi kita memanggil halaman (setiap fungsi harus berbeda dengan fungsi lainnya)
    {
        return view('admin.dashboard.master'); //halaman yang akan kita tuju
    }

    public function index2()
    {
        return view('admin.dashboard');
    }
      public function index3()
    {
        return view('admin.transaksi');
    }
     public function index4()
    {
        return view('landing_paage');
    }
     public function index5()
    {
        return view('login');
    }
      public function index6()
    {
        return view('kasir.dashboard_kasir');
    }
      public function index7()
    {
        return view('kasir.sidebar_kasir');
    }
      public function index9()
    {
        return view('admin.kelola_kasir');
    }
}
