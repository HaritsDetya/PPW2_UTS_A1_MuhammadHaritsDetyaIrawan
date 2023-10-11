<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class ControllerPemain extends Controller
{
    public function index(){
        $data_pemain = Pemain::all()->sortByDesc('id');
        $no = 0;
        return view('team.pemain', compact('data_pemain', 'no'));
    }
}
