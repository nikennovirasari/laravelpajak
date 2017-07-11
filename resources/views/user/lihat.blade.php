@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
						<div class="panel-heading">
	<strong><a href="{{url('user')}}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Data User</strong>
</div>
<table class="table">
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>{{$user->username}}</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td>{{$user->password}}</td>
	</tr>
	<tr>
		<td>Level</td>
		<td>:</td>
		<td>{{$user->level}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$user->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$user->updated_at}}</td>
	</tr>
</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
</section>
@stop