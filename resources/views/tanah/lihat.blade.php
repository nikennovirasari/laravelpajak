@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('tanah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Data Tanah</strong>
</div>
<table class="table">
	<tr>
		<td>ID Tanah</td>
		<td>:</td>
		<td>{{$tanah->id}}</td>
	</tr>
	<tr>
		<td>Luas</td>
		<td>:</td>
		<td>{{$tanah->th_luas}}</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>{{$tanah->th_kelas}}</td>
	</tr>
	<tr>
		<td>Nilai per meter persegi</td>
		<td>:</td>
		<td>{{$tanah->th_nilaiperm2}}</td>
	</tr>
	<tr>
		<td>Tagihan Tanah</td>
		<td>:</td>
		<td>{{$tagihan_th}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$tanah->created_at}}</td>
	</tr>
	<tr>
		<td></td>
		<td class="col-xs-1">:</td>
		<td>{{$tanah->updated_at}}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@stop