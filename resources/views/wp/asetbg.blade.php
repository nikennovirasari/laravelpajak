@extends('master1')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
<strong>Aset Bangunan</strong>

<div class="clearfix"></div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Bangunan</th>
			<th>Luas</th>
			<th>Kelas</th>
			<th>NJOP per meter persegi</th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		@foreach ($semuaBangunan as $bangunan)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$bangunan->id or 'id kosong'}}</td>
			<td>{{$bangunan->bg_luas or '0'}}</td>
			<td>{{$bangunan->bg_kelas or '-'}}</td>
			<td>{{$bangunan->bg_nilaiperm2 or '0'}}</td>
			
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