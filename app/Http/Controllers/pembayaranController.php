<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pembayaran;
use App\petugas;
use App\wajibpajak;
use App\pajak;

class pembayaranController extends Controller
{
	protected $informasi = "Berhasil simpan data";
	public function awal()
	{
		$semuaPembayaran= pembayaran::all();
		return view('pembayaran.awal', compact('semuaPembayaran'));
	}
	public function tambah()
	{
		$pembayaran = new pembayaran;
		$petugas = new petugas;
		$wajibpajak = new wajibpajak;
		$pajak = new pajak;

		return view('pembayaran.tambah', compact('petugas','wajibpajak','pajak'));
	}
	public function simpan(Request $input)
	{
		
		$pembayaran = new pembayaran;
			
		$pembayaran->tmp_bayar= $input->tmp_bayar;
		
		$pembayaran->tgl_bayar= $input->tgl_bayar;
		$pembayaran->status= $input->status;
		$pembayaran->petugas_id= $input->petugas_id;
		$pembayaran->wajibpajak_id= $input->wajibpajak_id;
		$pembayaran->pajak_id= $input->pajak_id;
		
		if($pembayaran->save())
			$this->informasi = 'Berhasil simpan data';
		return redirect('pembayaran')->with(['informasi'=>$this->informasi]);
	
	}
	public function edit($id)
	{
		$pembayaran = pembayaran::find($id);
		$petugas = new petugas;
		$wajibpajak = new wajibpajak;
		$pajak = new pajak;
		return view('pembayaran.edit', compact('petugas','wajibpajak','pajak'))->with(array('pembayaran'=>$pembayaran));
	}
	public function lihat($id)
	{
		$pembayaran = pembayaran::find($id);
		return view('pembayaran.lihat')->with(array('pembayaran'=>$pembayaran));
	}
	public function update($id, Request $input)
	{
		$pembayaran = pembayaran::find($id);
		$pembayaran->tmp_bayar= $input->tmp_bayar;
		
		$pembayaran->tgl_bayar= $input->tgl_bayar;
		$pembayaran->status= $input->status;
		$pembayaran->petugas_id= $input->petugas_id;
		$pembayaran->wajibpajak_id= $input->wajibpajak_id;
		$pembayaran->pajak_id= $input->pajak_id;
		
		if($pembayaran->save())
			$this->informasi = 'Berhasil simpan data';
		return redirect('pembayaran')->with(['informasi'=>$this->informasi]);
		// $pembayaran->keterangan= $input->keterangan;
		// $pembayaran->save();
		// if(!is_null($input->username)){
		// 	$user = $pembayaran->user->fill($input->only('username'));
		// 	if(!empty($input->password)) $user->password = $input->password;
		// 	if($user->save()) $this->informasi ='Berhasil simpan data';
		// }else{
		// 	$this->informasi ='BBerhasil simpan data';
		// }
		// return redirect('pembayaran')->with(['informasi'=>$this->informasi]);
	}
	

	public function hapus($id)
	{
		$pembayaran = pembayaran::find($id);
		$informasi=$pembayaran->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('pembayaran')->with(['informasi'=>$informasi]);
	}
}

 ?>