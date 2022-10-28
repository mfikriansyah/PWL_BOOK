<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["Fikri Jackson Of Tiago", "Layung Is Back", "Pak Ustad Azie"];
        return view('dosen', ['nama' => $data]);
    }
}
