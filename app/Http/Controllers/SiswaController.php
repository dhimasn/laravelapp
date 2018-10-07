<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    public function index()
	{
		$halaman='siswa';
		$siswa=['rasmus lerdorf','Taylor Otwell','Brendan Eich','John Resig'];
		return view('siswa.index',compact('halaman','siswa'));
	}
	public function create()
	{
		return view('siswa.create');
	}
	public function store(Request $request)
	{
		//dd($request);
		$siswa = $request->all();
		//dd($siswa);
		return $siswa;
	}
}
