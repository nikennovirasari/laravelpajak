@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
<strong>Data Bangunan</strong>
<a href="{{url('bangunan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Bangunan</i></a>
<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Bangunan</th>
			<th>Luas</th>
			<th>Kelas</th>
			<th>Nilai per meter persegi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($data as $bangunan)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$bangunan->id or 'id kosong'}}</td>
			<td>{{$bangunan->bg_luas or 'luas kosong'}}</td>
			<td>{{$bangunan->bg_kelas or 'kelas kosong'}}</td>
			<td>{{$bangunan->bg_nilaiperm2 or 'Nilai per meter persegi kosong'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("bangunan/edit/{$bangunan->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
					<a href='{{url("bangunan/{$bangunan->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href='{{url("bangunan/hapus/{$bangunan->id}")}}' class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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