<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\user;
use Illuminate\Auth\SessionGuard;
use Auth;
use App\wajibpajak;
class sesiController extends Controller
{
	public function master1()
	{
		
		return view('master1');
	}
	public function master2()
	{
		return view('master2');
	}
	public function index()
	{
		return view('master');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');	
		}
		return view('login');
	}
public function validasi(Request $input){
    	$this->validate($input,[
    			'username' => 'required',
    			'password' => 'required',
    	]);
    	$user = user::where($input->only('username','password'))->first();
    	if (!is_null($user)) {
			Auth::login($user);
		}
		if (Auth::check()) {
			
			if (Auth::user()->level=='1') {
				$this->informasi = 'Selamat Datang '.Auth::user()->username;
				return redirect('master2')->with(['informasi'=>$this->informasi]);
			}
			elseif (Auth::user()->level=='2') {
				$this->informasi = 'Selamat Datang '.Auth::user()->username;
				return redirect('master1')->with(['informasi'=>$this->informasi]);
			}
		}
    	
    	return redirect('/login')->withErrors(['User tidak ada']);
    }
public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect('/login')->withErrors(['Anda Logout! Silahkan Login Untuk Masuk']);
	}else{
		return redirect('/login')->withErrors(['Silahkan Login Terlebih Dahulu']);
	}
	}
}

 
