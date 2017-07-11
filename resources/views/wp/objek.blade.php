@extends('master1')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Objek Pajak</h3>

<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>NOP</th>
			
			<th>Alamat</th>
			
			<th>Kota/Kabupaten</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaObjek as $ojk)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$ojk->nop or 'nop kosong'}}</td>
			<td>{{$ojk->ltk_jln or '-'}}</td>
			
			<td>{{$ojk->ltk_kota or '-'}}</td>
			<td>
				<div class="btn-group" role="group">
					<a href='{{url("ojk/{$ojk->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>					
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