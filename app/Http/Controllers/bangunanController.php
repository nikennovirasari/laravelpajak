<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controler;
use App\bangunan;

class bangunanController extends Controller
{
	public function awal()
	{
		return view('bangunan.awal',['data'=>bangunan::all()]);
	}
	public function tambah()
	{
		return view('bangunan.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'bg_luas'=>'required|numeric',
			'bg_kelas'=>'required',
			'bg_nilaiperm2'=>'required|numeric',
			]);
		$bangunan = new bangunan;
		$bangunan->bg_luas= $input->bg_luas;
		$bangunan->bg_kelas= $input->bg_kelas;
		$bangunan->bg_nilaiperm2= $input->bg_nilaiperm2;
		$informasi=$bangunan->save() ? 'Berhasil simpan data':'Gagal simpan data';
		return redirect('bangunan')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$bangunan = bangunan::find($id);
		return view('bangunan.edit')->with(array('bangunan'=>$bangunan));
	}
	public function lihat($id)
	{
		$bangunan = bangunan::find($id);
		$tagihan_bg = $bangunan->bg_luas * $bangunan->bg_nilaiperm2;
		return view('bangunan.lihat',compact('bangunan','tagihan_bg'));
	}
	public function update($id, Request $input)
	{
		$this->validate($input,[
			'bg_luas'=>'required|numeric',
			'bg_kelas'=>'required',
			'bg_nilaiperm2'=>'required|numeric',
			]);
		$bangunan = bangunan::find($id);
		$bangunan->bg_luas= $input->bg_luas;
		$bangunan->bg_kelas= $input->bg_kelas;
		$bangunan->bg_nilaiperm2= $input->bg_nilaiperm2;
		$informasi=$bangunan->save()?'Berhasil update data':'Gagal update data';
		return redirect('bangunan')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$bangunan = bangunan::find($id);
		$informasi=$bangunan->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('bangunan')->with(['informasi'=>$informasi]);
	}
}

 ?>