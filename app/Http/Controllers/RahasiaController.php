<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RahasiaController extends Controller
{
    public function halamanRahasia()
	{
		return 'Anda Sedang melihat<strong>Halaman Rahasia.</strong>';
	}
	public function showMeSecret()
	{
		$url  = route('secret');
		$link = '<a href="'.$url.'">ke Halaman Rahasia</a>';
		return= $link;
	}
}
