<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index() {
        $response = Http::get('https://animechan.vercel.app/api/random');
        $data = $response->json();
        // dd($data);
        return view('index', compact('decode'));
    }
}
