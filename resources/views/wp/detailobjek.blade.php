@extends('master1')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('objek')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Objek Pajak</strong>
</div>
<table class="table">
	<tr>
		<td>NOP</td>
		<td>:</td>
		<td>{{$pajak->nop}}</td>
	</tr>
	
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>{{$pajak->ltk_jln}}</td>
	</tr>

	<tr>
		<td>RT</td>
		<td>:</td>
		<td>{{$pajak->ltk_rt}}</td>
	</tr>

	<tr>
		<td>RW</td>
		<td>:</td>
		<td>{{$pajak->ltk_rw}}</td>
	</tr>

	<tr>
		<td>Kelurahan/Desa</td>
		<td>:</td>
		<td>{{$pajak->ltk_kel}}</td>
	</tr>

	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td>{{$pajak->ltk_kec}}</td>
	</tr>

	<tr>
		<td>Kota/Kabupaten</td>
		<td>:</td>
		<td>{{$pajak->ltk_kota}}</td>
	</tr>

	<tr>
		<td>ID Bangunan</td>
		<td>:</td>
		<td>{{$pajak->bangunan->id}}</td>
	</tr>

	<tr>
		<td>ID Tanah</td>
		<td>:</td>
		<td>{{$pajak->tanah->id}}</td>
	</tr>	
	
	
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$pajak->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$pajak->updated_at}}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@stop