<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,Barang,room};



class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::all()->count();
        $barang = Barang::all()->count();
        $room = room::all()->count();
        return view('dashboard', compact('jumlah_user','barang','room'));
    }

}
