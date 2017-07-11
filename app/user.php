<?php 
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class user extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table='user';
	protected $guarded=['id'];
	//protected $fillable=['username','password','level'];

	public function petugas()
	{
		return $this->hasOne(petugas::class,'user_id');
	}
	public function wajibpajak()
	{
		return $this->hasOne(wajibpajak::class,'user_id');
	}
	
	
}

 ?>