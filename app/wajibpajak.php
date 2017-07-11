<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class wajibpajak extends Model
{
	protected $table='wajibpajak';
	protected $guarded=['id'];
	
	public function user()
	{
		return $this->belongsTo(user::class);
	}
	public function pembayaran()
	{
		return $this->hasMany(pembayaran::class, 'wajibpajak_id');
	}
	public function listIDWajibpajak(){
		$out=[];
		foreach($this->all() as $wp){
			$out[$wp->id]="{$wp->id} ({$wp->nama})";
		}
		return $out;
	}
}
 ?>