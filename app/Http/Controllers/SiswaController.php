<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\siswa;

use Validator;

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
		//Siswa::create($request->all());
		$input=$request->all();
		$validator=Validator::make($input,[
			'nisn'=>'required|string|size:4|unique:siswa,nisn',
			'nama_siswa'=>'required|string|max:30',
			'tanggal_lahir'=>'required|date',
			'jenis_kelamin'=>'required|in:L,P',
		]);
		if($validator->fails()){
			return redirect('siswa/create')
				->withInput()
				->withErrors($validator);
		}
		Siswa::create($input);
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
		//$orang=['rasmus lerdorf','taylor otwell','brendan eich','john resig'];
		//$koleksi=collect($orang)->map(function($nama){
		//	return ucwords($nama);
		//});
		//return $koleksi;
		
		//$collection=Siswa::all()->first();
		//return $collection;
		
		//$collection = Siswa::all()->last();
		//return $collection;
		
		//$collection=Siswa::all();
		//$jumlah = $collection->count();
		//return 'Jumlah Data :'. $jumlah;
		
		//$collection=Siswa::all()->take(2);
		//return $collection;
		
		//$collection=Siswa::all()->pluck('nama_siswa');
		//return $collection;
		
		//$collection=Siswa::all();
		//$collection=$collection->where('nisn','1005');
		//return $collection;
		
		//$collection=Siswa::all();
		//$collection=$collection->whereIn('nisn',['1003','1007','1009']);
		//return $collection;
		
		//$data=[
			   //['nisn'=>'1001','nama_siswa'=>'agus yulianto'],
			  // ['nisn'=>'1002','nama_siswa'=>'agustina aggreani'],
			   //['nisn'=>'1003','nama_siswa'=>'bayu firmansyah'],   
			//];
			//$koleksi=collect($data);
			//$koleksi->toJson();
			//return $koleksi;
	}
	public function dateMutator()
	{
		//$siswa=Siswa::findOrFail(1);
		//dd($siswa->created_at);
		//return 'Umur Siswa ini adalah :'.$siswa->tanggal_lahir->age.'tahun.';
	
		$siswa=Siswa::findOrFail(1);
		$str='Tanggal Lahir:'.
			  $siswa->tanggal_lahir->format('d-m-y').'<br>'.
			  'ulang tahun ke-30 akan jatuh pada tanggal:'.
			  '<strong>'.
			  $siswa->tanggal_lahir->addYears(30)->format('d-m-y')
			  .'</strong>';
		return $str;
	}
		
		
}
