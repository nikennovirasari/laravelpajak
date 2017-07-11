<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class pajak extends Model
{
	protected $table='pajak';
	protected $guarded=['id'];
	
	
	public function bangunan()
	{
		return $this->belongsTo(bangunan::class);
	}
	public function tanah()
	{
		return $this->belongsTo(tanah::class);
	}
	public function pembayaran()
	{
		return $this->hasMany(pembayaran::class, 'pajak_id');
	}
	public function listIDPajak(){
		$out=[];
		foreach($this->all() as $pj){
			$out[$pj->id]="{$pj->id} ({$pj->nop})";
		}
		return $out;
	}
	public function getHargaAttribute()
    {
        $total_bayar = $this->bangunan->bg_luas * $this->bangunan->bg_nilaiperm2 + $this->tanah->th_luas * $this->tanah->th_nilaiperm2;
        return $total_bayar;
    }
}
 ?>