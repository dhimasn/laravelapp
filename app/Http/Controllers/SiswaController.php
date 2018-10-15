<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\siswa;

class SiswaController extends Controller
{
    public function index()
	{
		
		$siswa_list=Siswa::orderBy('nama_siswa','asc')->Paginate(10);
		$jumlah_siswa= Siswa::count();
		return view('siswa.index',compact('siswa_list','jumlah_siswa'));
		
	}
	public function create()
	{
		$halaman='siswa';
		return view('siswa.create');
	}
	public function store(Request $request)
	{
		//dd($request);
		//$siswa = $request->all();
		//dd($siswa);
		//$siswa= new\App\Siswa;
		//$siswa->nisn =$request->nisn;
		//$siswa->nama_siswa=$request->nama_siswa;
		//$siswa->tanggal_lahir=$request->tanggal_lahir;
		//$siswa->jenis_kelamin=$request->jenis_kelamin;
		//$siswa->save();
		Siswa::create($request->all());
		return redirect('siswa');
	}
	public function show($id)
	{
		$halaman='siswa';
		$siswa=Siswa::findOrFail($id);
		return view('siswa.show',compact('siswa'));
	}
	public function edit($id)
	{
		$siswa = Siswa::findOrFail($id);
		return view('siswa.edit',compact('siswa'));
	}
	public function update($id, Request $request)
	{
		$siswa = Siswa::findOrFail($id);
		$siswa->update($request->all());
		return redirect('siswa');
	}
	public function destroy($id)
	{
		$siswa = Siswa::findOrFail($id);
		$siswa-> delete();
		return redirect('siswa');
	}
	public function tesCollection()
	{
		$orang=['rasmus lerdorf','taylor otwell','brendan eich','john resig'];
		$koleksi=collect($orang)->map(function($nama){
			return ucwords($nama);
		});
		return $koleksi;
	}
}
