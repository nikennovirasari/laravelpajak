<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pajak;
use App\bangunan;
use App\tanah;



class pajakController extends Controller
{
	protected $informasi = "Berhasil simpan data";

	public function awal()
	{
		$semuaPajak= pajak::all();
		return view('pajak.awal', compact('semuaPajak'));
	}
	// public function tempo()
	// {
	// 	$today=Carbon::now('Asia/Brunei')->toDateString();
	// 	return view('pajak.tempo');
	// }
	// public function savetempo()
	// {
	// 	$pajak = new pajak;
	// 	$pajak->tgl_jthtempo=$input->tgl_jthtempo;

	// 	if ($pajak->save()) {
	// 		$this->info = 'Tanggal Jatuh Temp ditetapkan';
	// 		return redirect('pajak'.$pajak->id)->with(['info'=>$this->info]);
	// 	}
	// }
	public function tambah()
	{
		$bangunan = new bangunan();
		$tanah = new tanah();
		
		return view('pajak.tambah', compact('bangunan','tanah'));
	}
	
	
	public function simpan(Request $input)
	{
		
		$this->validate($input,[
			'nop'=>'required|numeric',
			'tgl_jthtempo'=>'required',
			'ltk_prov'=>'required',
			'ltk_kota'=>'required',
			'ltk_kec'=>'required',
			'ltk_kel'=>'required',
			'ltk_rw'=>'required',
			'ltk_rt'=>'required',
			'ltk_jln'=>'required',
			]);
		$pajak = new pajak;
		$pajak->nop= $input->nop;
		$pajak->tgl_jthtempo= $input->tgl_jthtempo;
		
		$pajak->ltk_prov= $input->ltk_prov;
		$pajak->ltk_kota= $input->ltk_kota;
		$pajak->ltk_kec= $input->ltk_kec;
		$pajak->ltk_kel= $input->ltk_kel;
		$pajak->ltk_rw= $input->ltk_rw;
		$pajak->ltk_rt= $input->ltk_rt;
		$pajak->ltk_jln= $input->ltk_jln;
		$pajak->bangunan_id= $input->bangunan_id;
		$pajak->tanah_id= $input->tanah_id;
		
	if ($pajak->save())
	
            $this->info = 'Berhasil simpan data';
	
		return redirect('pajak')->with(['informasi'=>$this->informasi]);
	
	}
	public function edit($id)
	{
		$pajak = pajak::find($id);
		$bangunan = new bangunan;
		$tanah = new tanah;
		return view('pajak.edit', compact('pajak','bangunan','tanah'));
	}
	public function lihat($id)
	{

		$pajak = pajak::find($id);
		$total_bayar = $pajak->bangunan->bg_luas * $pajak->bangunan->bg_nilaiperm2 + $pajak->tanah->th_luas * $pajak->tanah->th_nilaiperm2;
		return view('pajak.lihat', compact('pajak','total_bayar'));
	}
	public function update($id, Request $input)
	{
		$this->validate($input,[
			'nop'=>'required|numeric',
			'tgl_jthtempo'=>'required',
			'ltk_prov'=>'required',
			'ltk_kota'=>'required',
			'ltk_kec'=>'required',
			'ltk_kel'=>'required',
			'ltk_rw'=>'required',
			'ltk_rt'=>'required',
			'ltk_jln'=>'required',
			]);
		
		$pajak = pajak::find($id);
		$pajak->nop= $input->nop;
		$pajak->tgl_jthtempo= $input->tgl_jthtempo;
		
		$pajak->ltk_prov= $input->ltk_prov;
		$pajak->ltk_kota= $input->ltk_kota;
		$pajak->ltk_kec= $input->ltk_kec;
		$pajak->ltk_kel= $input->ltk_kel;
		$pajak->ltk_rw= $input->ltk_rw;
		$pajak->ltk_rt= $input->ltk_rt;
		$pajak->ltk_jln= $input->ltk_jln;
		$pajak->bangunan_id= $input->bangunan_id;
		$pajak->tanah_id= $input->tanah_id;
		
		if ($pajak->save()) 
            $this->info = 'Berhasil simpan data';

		
		return redirect('pajak')->with(['informasi'=>$this->informasi]);
	// 	$pajak->nop= $input->nop;
	// 	$pajak->tgl_jthtempo= $input->tgl_jthtempo;
	// 	$pajak->almt_prov= $input->ltk_prov;
	// 	$pajak->almt_kota= $input->ltk_kota;
	// 	$pajak->almt_kec= $input->ltk_kec;
	// 	$pajak->almt_kel= $input->ltk_kel;
	// 	$pajak->almt_rw= $input->ltk_rw;
	// 	$pajak->almt_rt= $input->ltk_rt;
	// 	$pajak->almt_jln= $input->ltk_jln;
	// 	$pajak->bangunan_id= $input->bangunan_id;
	// 	$pajak->tanah_id= $input->tanah_id;
	// 	if($pa->pajak()->save($pajak))
	// 		$this->informasi = 'Berhasil simpan data';
		
	// 	return redirect('pajak')->with(['informasi'=>$this->informasi]);
	// }
	}

	public function hapus($id)
	{
		$pajak = pajak::find($id);
		$informasi=$pajak->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('pajak')->with(['informasi'=>$informasi]);
	}
}

 ?>