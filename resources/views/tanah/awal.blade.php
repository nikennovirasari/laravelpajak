@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Tanah</h3>
<a href="{{url('tanah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Tanah</i></a>
<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Tanah</th>
			<th>Luas</th>
			<th>Kelas</th>
			<th>Nilai per meter persegi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($data as $tanah)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$tanah->id or 'id kosong'}}</td>
			<td>{{$tanah->th_luas or 'luas kosong'}}</td>
			<td>{{$tanah->th_kelas or 'kelas kosong'}}</td>
			<td>{{$tanah->th_nilaiperm2 or 'Nilai per meter persegi kosong'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("tanah/edit/{$tanah->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
					<a href='{{url("tanah/{$tanah->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href='{{url("tanah/hapus/{$tanah->id}")}}' class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
</div>
</div>
</div>
</section>
@stop