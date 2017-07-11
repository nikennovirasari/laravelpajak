@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('pajak')}}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Data Pajak</strong>
</div>
<table class="table">
	<tr>
		<td>NOP</td>
		<td>:</td>
		<td>{{$pajak->nop}}</td>
	</tr>
	<tr>
		<td>Kelas Bangunan</td>
		<td>:</td>
		<td>{{$pajak->bangunan->bg_kelas}}</td>
	</tr>
	<tr>
		<td>Kelas Tanah</td>
		<td>:</td>
		<td>{{$pajak->tanah->th_kelas}}</td>
	</tr>
	<tr>
		<td>TglJthTempo</td>
		<td>:</td>
		<td>{{$pajak->tgl_jthtempo}}</td>
	</tr>
	<tr>
		<td>Total Bayar</td>
		<td>:</td>
		<td>{{$total_bayar}}</td>
	</tr>
	<tr>
		<td>Jalan</td>
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
		<td>{{$pajak->ltk_rt}}</td>
	</tr>
	<tr>
		<td>Kelurahan</td>
		<td>:</td>
		<td>{{$pajak->ltk_kel}}</td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td>{{$pajak->ltk_kec}}</td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>:</td>
		<td>{{$pajak->ltk_kota}}</td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td>:</td>
		<td>{{$pajak->ltk_prov}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$pajak->created_at}}</td>
	</tr>
	<tr>
		<td></td>
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