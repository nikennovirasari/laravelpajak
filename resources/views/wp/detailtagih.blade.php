@extends('master1')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('tagih')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Tagihan Pajak</strong>
</div>
<table class="table">
	<tr>
		<td>ID Pembayaran</td>
		<td>:</td>
		<td>{{$pembayaran->id}}</td>
	</tr>
	<tr>
		<td>ID Pajak</td>
		<td>:</td>
		<td>{{$pembayaran->pajak_id}}</td>
	</tr>
	<tr>
		<td>ID Wajib Pajak</td>
		<td>:</td>
		<td>{{$pembayaran->wajibpajak_id}}</td>
	</tr>
	<tr>
		<td>Tempat Bayar</td>
		<td>:</td>
		<td>{{$pembayaran->tmp_bayar}}</td>
	</tr>
	<tr>
		<td>Tanggal Jatuh Tempo</td>
		<td>:</td>
		<td>{{$pembayaran->pajak->tgl_jthtempo}}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>{{$pembayaran->status}}</td>
	</tr>
	<tr>
		<td>Tanggal Bayar</td>
		<td>:</td>
		<td>{{$pembayaran->tgl_bayar}}</td>
	</tr>
	<tr>
		<td>Total Tagihan</td>
		<td>:</td>
		<td>{{$total_bayar}}</td>
	</tr>
	
	
	
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$pembayaran->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$pembayaran->updated_at}}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@stop