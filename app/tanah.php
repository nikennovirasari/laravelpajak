<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class tanah extends Model
{
	protected $table='tanah';
	protected $guarded=['id'];

	public function pajak()
	{
		return $this->hasOne(pajak::class, 'tanah_id');
	}
	public function listIDDanKelas(){
		$out=[];
		foreach($this->all() as $th){
			$out[$th->id]="{$th->id} ({$th->th_kelas})";
		}
		return $out;
	}
	public function getTagihanTanah()
    {
        $tagihan_th = $this->tanah->th_luas * $this->tanah->th_nilaiperm2;
        return $tagihan_th;
    }
}
 ?>