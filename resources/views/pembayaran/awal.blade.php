@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pembayaran</h3>
<a href="{{url('pembayaran/tambah')}}" class="btn btn-xs btn-primary pull-right">
<i class="fa fa-plus"> Pembayaran</i></a>
<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tempat Bayar</th>
			
			<th>Tanggal Bayar</th>
			<th>Status</th>
			<th>ID Petugas</th>
			<th>ID Wajib Pajak</th>
			<th>ID Pajak</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaPembayaran as $pembayaran)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$pembayaran->tmp_bayar or 'tempat kosong'}}</td>
			
			<td>{{$pembayaran->tgl_bayar or 'tanggal kosong'}}</td>
			<td>{{$pembayaran->status or 'status kosong'}}</td>
			<td>{{$pembayaran->petugas->id or 'id kosong'}}</td>
			<td>{{$pembayaran->wajibpajak->id or 'id kosong'}}</td>
			<td>{{$pembayaran->pajak->id or 'id kosong'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("pembayaran/edit/{$pembayaran->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
					<a href='{{url("pembayaran/{$pembayaran->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href='{{url("pembayaran/hapus/{$pembayaran->id}")}}' class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop