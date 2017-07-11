<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\petugas;
use App\user;

class petugasController extends Controller
{
	protected $informasi = "Gagal simpan data";
	public function awal()
	{
		$semuaPetugas= petugas::all();
		return view('petugas.awal', compact('semuaPetugas'));
	}
	public function tambah()
	{
		$user = new user();
		return view('petugas.tambah',compact('user'));
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			'level'=>'required',
			]);
		$user = new user($input->only('username','password','level'));
		if($user->save()){
		$petugas = new petugas;
		$petugas->keterangan= $input->keterangan;
		if($user->petugas()->save($petugas))
			$this->informasi = 'Berhasil simpan data petugas';
	
		return redirect('petugas')->with(['informasi'=>$this->informasi]);
	}
	}
	public function edit($id)
	{
		$petugas = petugas::find($id);
		return view('petugas.edit')->with(array('petugas'=>$petugas));
	}
	public function lihat($id)
	{
		$petugas = petugas::find($id);
		return view('petugas.lihat')->with(array('petugas'=>$petugas));
	}
	public function update($id, Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			]);
		$user = new user($input->only('username','password','level'));
		if($user->save()){
		$petugas = new petugas;
		$petugas->keterangan= $input->keterangan;
		if($user->petugas()->save($petugas))
			$this->informasi = 'Berhasil update data petugas';
	
		return redirect('petugas')->with(['informasi'=>$this->informasi]);
		}
	}

	public function hapus($id)
	{
		$petugas = petugas::find($id);
		$informasi=$petugas->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('petugas')->with(['informasi'=>$informasi]);
	}
}

 ?>