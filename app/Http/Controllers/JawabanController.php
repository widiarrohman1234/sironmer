<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jawaban;
use App\Models\Kategori;
use App\Models\Pertanyaan;

class JawabanController extends Controller
{
        function index(){
    	$data['list_jawaban'] = Jawaban::all();
    	return view('admin.jawaban.index', $data);
    }

    function create(){
    	$data['list_pertanyaan'] = Pertanyaan::all();
		return view('admin.jawaban.create', $data);
	}

	function store(){
		$data = new jawaban;
		$data->id_user = request()->user()->id;
		$data->id_pertanyaan = request('id_pertanyaan');
		$data->jawaban = request('jawaban');
		$data->save();
		return redirect('admin/jawaban')->with('success','Data Berhasil Ditambahkan');
		//dd(request()->all());
	}

	function show(jawaban $jawaban){
		$data['jawaban'] = $jawaban;
		return view('admin.jawaban.show', $data);
	}

	function edit(jawaban $jawaban){
		$data['list_jawaban'] = $jawaban;
		return view('admin.jawaban.edit', $data);
	}

	function update(jawaban $jawaban){
		$jawaban->kategori = request('kategori');
		$jawaban->pertanyaan = request('pertanyaan');
		$jawaban->jawaban = request('jawaban');
		$jawaban->save();

		return redirect('admin/jawaban')->with('success','Data Berhasil Diubah');
	}

	function destroy(jawaban $jawaban){
		$jawaban->delete();
		return redirect('admin/jawaban')->with('danger','Data Berhasil Dihapus');
	}
}
