@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pajak</h3>
<a href="{{url('pajak/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Pajak</i></a>
<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Pajak</th>
			<th>NOP</th>
			<th>Jatuh Tempo</th>
			
			<th>Alamat</th>
			<th>Kelas Bangunan</th>
			<th>Kelas Tanah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaPajak as $pajak)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$pajak->id or 'id kosong'}}</td>
			<td>{{$pajak->nop or 'nop kosong'}}</td>
			<td>{{$pajak->tgl_jthtempo or 'tanggal jatuh tempo kosong'}}</td>
			
			<td>{{$pajak->ltk_jln or 'jalan kosong'}}</td>
			<td>{{$pajak->bangunan->bg_kelas or 'ID bangunan kosong'}}</td>
			<td>{{$pajak->tanah->th_kelas or 'ID tanah kosong kosong'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href="{{url('pajak/edit/'.$pajak->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
					<a href="{{url('pajak/'.$pajak->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
					<a href="{{url('pajak/hapus/'.$pajak->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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