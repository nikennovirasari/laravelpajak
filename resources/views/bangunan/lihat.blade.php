@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('bangunan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Data Bangunan</strong>
</div>
<table class="table">
	<tr>
		<td>ID Bangunan</td>
		<td>:</td>
		<td>{{$bangunan->id}}</td>
	</tr>
	<tr>
		<td>Luas</td>
		<td>:</td>
		<td>{{$bangunan->bg_luas}}</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>{{$bangunan->bg_kelas}}</td>
	</tr>
	<tr>
		<td>Nilai per meter persegi</td>
		<td>:</td>
		<td>{{$bangunan->bg_nilaiperm2}}</td>
	</tr>
	<tr>
		<td>Tagihan Bangunan</td>
		<td>:</td>
		<td>{{$tagihan_bg}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$bangunan->created_at}}</td>
	</tr>
	<tr>
		<td></td>
		<td class="col-xs-1">:</td>
		<td>{{$bangunan->updated_at}}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@stop