@extends('master1')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Wajib Pajak</h3>

<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Wajib Pajak</th>
			<th>Nama</th>
			<th>NPWP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaWajibpajak as $wp)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$wp->id or 'id kosong'}}</td>
			<td>{{$wp->nama or 'nama kosong'}}</td>
			<td>{{$wp->npwp or 'npwp kosong'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("wp/{$wp->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>					
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