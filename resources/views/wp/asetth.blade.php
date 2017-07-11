@extends('master1')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
<strong>Aset Tanah</strong>

<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Tanah</th>
			<th>Luas</th>
			<th>Kelas</th>
			<th>NJOP per meter persegi</th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaTanah as $tanah)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$tanah->id or 'id kosong'}}</td>
			<td>{{$tanah->th_luas or '0'}}</td>
			<td>{{$tanah->th_kelas or '-'}}</td>
			<td>{{$tanah->th_nilaiperm2 or '0'}}</td>
			
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