<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class pembayaran extends Model
{
	protected $table='pembayaran';
	protected $guarded=['id'];
	
	
	public function petugas()
	{
		return $this->belongsTo(petugas::class);
	}
	public function wajibpajak()
	{
		return $this->belongsTo(wajibpajak::class);
	}
	public function pajak()
	{
		return $this->belongsTo(pajak::class);
	}
	public function getTagihanAttribute()
    {
        $total_bayar = $this->bangunan->bg_luas * $this->bangunan->bg_nilaiperm2 + $this->tanah->th_luas * $this->tanah->th_nilaiperm2;
        return $total_bayar;
    }
	
}
 ?>