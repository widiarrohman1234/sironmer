<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use App\Models\Jawaban;


class HomeController extends Controller
{
    function index(){
    	$data['list_kategori'] = Kategori::all();
    	return view('index', $data);
    }

    function beranda(){
        $data['list_kategori'] = Kategori::all();
        $data['list_pertanyaan'] = Pertanyaan::all();
    	return view('beranda', $data);
    }

    function QA(){
        $data['list_kategori'] = Kategori::all();
        $data['list_pertanyaan'] = Pertanyaan::all();
    	return view('Q&A', $data);
    }

    function detail(Pertanyaan $pertanyaan){
        $data['list_pertanyaan'] = Pertanyaan::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_jawaban'] = Jawaban::all();
        // $data['list_pertanyaan'] = $pertanyaan;
        return view('detail', $data);
    }
}
