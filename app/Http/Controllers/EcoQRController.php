<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcoQRController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function cadastro_fornecedor() {
        return view('cadastro_fornecedor');
    }
}
