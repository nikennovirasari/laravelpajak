<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controler;
use App\user;

class userController extends Controller
{
	protected $informasi = "Gagal simpan data";
	public function awal()
	{
		return view('user.awal',['data'=>user::all()]);
	}
	public function tambah()
	{
		return view('user.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			'level'=>'required',
			]);
		$user = new user;
		$user->username= $input->username;
		$user->password= $input->password;
		$user->level= $input->level;
		$informasi=$user->save() ? 'Berhasil simpan data':'Gagal simpan data';
		return redirect('user')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$user = user::find($id);
		return view('user.edit')->with(array('user'=>$user));
	}
	public function lihat($id)
	{
		$user = user::find($id);
		return view('user.lihat')->with(array('user'=>$user));
	}
	public function update($id, Request $input)
	{
		$user = user::find($id);
		$user->username=$input->username;
		$user->password=$input->password;
		$user->level= $input->level;
		$informasi=$user->save()?'Berhasil update data':'Gagal update data';
		return redirect('user')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$user = user::find($id);
		$informasi=$user->delete()?'Berhasil hapus data':'gagal hapus data';
		return redirect('user')->with(['informasi'=>$informasi]);
	}
}

 ?>