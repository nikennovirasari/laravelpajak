<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\wajibpajak;
use App\user;
use App\petugas;
use App\pajak;
use App\pembayaran;
use App\bangunan;
use App\tanah;


class wpController extends Controller
{
	public function index()
	{
		$semuaWajibpajak= wajibpajak::all();
		$wajibpajak = new wajibpajak();
		return view('wp.index', compact('semuaWajibpajak', 'wajibpajak'));
	}
	public function detail($id)
	{
		$wajibpajak = wajibpajak::find($id);
		return view('wp.detail')->with(array('wajibpajak'=>$wajibpajak));
	}




	public function objek()
	{
		$semuaObjek = pajak::all();
		$wajibpajak = new wajibpajak();
		return view('wp.objek', compact('semuaObjek','wajibpajak'));
	}
	public function detailobjek($id)
	{
		$pajak = pajak::find($id);
		return view('wp.detailobjek',compact('pajak'));
	}




	public function asetbg()
	{
		$semuaBangunan = bangunan::all();	
		return view('wp.asetbg', compact('semuaBangunan'));
	}




	public function asetth()
	{
		$semuaTanah = tanah::all();	
		return view('wp.asetth', compact('semuaTanah'));
	}



	public function tagih()
	{
		$semuaTagihan = pembayaran::all();
		
		return view('wp.tagih', compact('semuaTagihan'));
	}
	public function detailtagih($id)
	{
		$pembayaran = pembayaran::find($id);
		$total_bayar = $pembayaran->pajak->bangunan->bg_luas * $pembayaran->pajak->bangunan->bg_nilaiperm2 + $pembayaran->pajak->tanah->th_luas * $pembayaran->pajak->tanah->th_nilaiperm2;
		return view('wp.detailtagih',compact('pembayaran','total_bayar'));
	}

	
	
}

 ?>