<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\wajibpajak;
use App\user;

class wajibpajakController extends Controller
{
	protected $informasi = "Gagal simpan data";
	public function awal()
	{
		$semuaWajibpajak= wajibpajak::all();
		return view('wajibpajak.awal', compact('semuaWajibpajak'));
	}
	public function tambah()
	{
		return view('wajibpajak.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			'level'=>'required',
			'nama'=>'required',
			'npwp'=>'required|numeric',
			'almt_prov'=>'required',
			'almt_kota'=>'required',
			'almt_kec'=>'required',
			'almt_kel'=>'required',
			'almt_rw'=>'required',
			'almt_rt'=>'required',
			'almt_jln'=>'required',
			]);

		$user = new user($input->only('username','password','level'));
		if($user->save()){
		$wajibpajak = new wajibpajak;
		$wajibpajak->nama= $input->nama;
		$wajibpajak->npwp= $input->npwp;
		$wajibpajak->almt_prov= $input->almt_prov;
		$wajibpajak->almt_kota= $input->almt_kota;
		$wajibpajak->almt_kec= $input->almt_kec;
		$wajibpajak->almt_kel= $input->almt_kel;
		$wajibpajak->almt_rw= $input->almt_rw;
		$wajibpajak->almt_rt= $input->almt_rt;
		$wajibpajak->almt_jln= $input->almt_jln;
		if($user->wajibpajak()->save($wajibpajak))
			$this->informasi = 'Berhasil simpan data';
		return redirect('wajibpajak')->with(['informasi'=>$this->informasi]);
	}
	}
	public function edit($id)
	{
		$wajibpajak = wajibpajak::find($id);
		return view('wajibpajak.edit')->with(array('wajibpajak'=>$wajibpajak));
	}
	public function lihat($id)
	{
		$wajibpajak = wajibpajak::find($id);
		return view('wajibpajak.lihat')->with(array('wajibpajak'=>$wajibpajak));
	}
	public function update($id, Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			'level'=>'required',
			'nama'=>'required',
			'npwp'=>'required|numeric',
			'almt_prov'=>'required',
			'almt_kota'=>'required',
			'almt_kec'=>'required',
			'almt_kel'=>'required',
			'almt_rw'=>'required',
			'almt_rt'=>'required',
			'almt_jln'=>'required',
			]);
		$wajibpajak = wajibpajak::find($id);
		$wajibpajak->nama= $input->nama;
		$wajibpajak->npwp= $input->npwp;
		$wajibpajak->almt_prov= $input->almt_prov;
		$wajibpajak->almt_kota= $input->almt_kota;
		$wajibpajak->almt_kec= $input->almt_kec;
		$wajibpajak->almt_kel= $input->almt_kel;
		$wajibpajak->almt_rw= $input->almt_rw;
		$wajibpajak->almt_rt= $input->almt_rt;
		$wajibpajak->almt_jln= $input->almt_jln;
		$wajibpajak->save();
		if(!is_null($input->username)){
			$user = $wajibpajak->user->fill($input->only('username'));
			if(!empty($input->password)) 
				$user->password = $input->password;
			if(!empty($input->password)) 
				$user->level = $input->level;
			if($user->save()) $this->informasi ='Berhasil update data';
		
		}
		return redirect('wajibpajak')->with(['informasi'=>$this->informasi]);
	}
	

	public function hapus($id)
	{
		$wajibpajak = wajibpajak::find($id);
		$informasi=$wajibpajak->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('wajibpajak')->with(['informasi'=>$informasi]);
	}
}

 ?>