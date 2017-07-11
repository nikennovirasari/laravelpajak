@extends('master1')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Tagihan Pajakk</h3>

<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Wajib Pajak</th>
			<th>Tempat Bayar</th>
			<th>Tanggal jatuh Tempo</th>
			<th>Status</th>
			<th>Tanggal Bayar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaTagihan as $tgh)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$tgh->wajibpajak_id or '-'}}</td>
			<td>{{$tgh->tmp_bayar or '-'}}</td>
			<td>{{$tgh->pajak->tgl_jthtempo or '-'}}</td>
			<td>{{$tgh->status or '-'}}</td>
			<td>{{$tgh->tgl_bayar or '-'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("tgh/{$tgh->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>					
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