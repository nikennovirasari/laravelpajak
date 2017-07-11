<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class bangunan extends Model
{
	protected $table='bangunan';
	protected $guarded=['id'];

	public function pajak()
	{
		return $this->hasOne(pajak::class, 'bangunan_id');
	}
	public function listIDDanKelas(){
		$out=[];
		foreach($this->all() as $bg){
			$out[$bg->id]="{$bg->id} ({$bg->bg_kelas})";
		}
		return $out;
	}
	public function getTagihanBangunan()
    {
        $tagihan_bg = $this->bangunan->bg_luas * $this->bangunan->bg_nilaiperm2;
        return $tagihan_bg;
    }
	
}
 ?>