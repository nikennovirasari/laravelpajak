<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class petugas extends Model
{
	protected $table='petugas';
	protected $guarded=['id'];
	
	public function user()
	{
		return $this->belongsTo(user::class);
	}
	public function pembayaran()
	{
		return $this->hasMany(pembayaran::class, 'petugas_id');
	}
	public function listIDPetugas(){
		$out=[];
		foreach($this->all() as $pt){
			$out[$pt->id]="{$pt->id} ({$pt->keterangan})";
		}
		return $out;
	}
	
}

 ?>