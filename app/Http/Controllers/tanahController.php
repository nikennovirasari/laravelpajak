<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controler;
use App\tanah;

class tanahController extends Controller
{
	public function awal()
	{
		return view('tanah.awal',['data'=>tanah::all()]);
	}
	public function tambah()
	{
		return view('tanah.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'th_luas'=>'required|numeric',
			'th_kelas'=>'required',
			'th_nilaiperm2'=>'required|numeric',
			]);
		$tanah = new tanah;
		$tanah->th_luas= $input->th_luas;
		$tanah->th_kelas= $input->th_kelas;
		$tanah->th_nilaiperm2= $input->th_nilaiperm2;
		$informasi=$tanah->save() ? 'Berhasil simpan data':'Gagal simpan data';
		return redirect('tanah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$tanah = tanah::find($id);
		return view('tanah.edit')->with(array('tanah'=>$tanah));
	}
	public function lihat($id)
	{
		$tanah = tanah::find($id);
		$tagihan_th = $tanah->th_luas * $tanah->th_nilaiperm2;
		return view('tanah.lihat',compact('tanah','tagihan_th'));
	}
	public function update($id, Request $input)
	{
		$this->validate($input,[
			'th_luas'=>'required|numeric',
			'th_kelas'=>'required',
			'th_nilaiperm2'=>'required|numeric',
			]);
		$tanah = tanah::find($id);
		$tanah->th_luas= $input->th_luas;
		$tanah->th_kelas= $input->th_kelas;
		$tanah->th_nilaiperm2= $input->th_nilaiperm2;
		$informasi=$tanah->save()?'Berhasil update data':'Gagal update data';
		return redirect('tanah')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$tanah = tanah::find($id);
		$informasi=$tanah->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('tanah')->with(['informasi'=>$informasi]);
	}
}

 ?>