@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box box-info">
					<div class="box-header with-border">
<div class="panel-heading">
	<strong><a href="{{url('wajibpajak')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left">
		
	</i></a>Detail Data Wajib Pajak</strong>
</div>
<table class="table">
	<tr>
		<td>ID</td>
		<td>:</td>
		<td>{{$wajibpajak->id}}</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{$wajibpajak->nama}}</td>
	</tr>
	<tr>
		<td>NPWP</td>
		<td>:</td>
		<td>{{$wajibpajak->npwp}}</td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_prov}}</td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_kota}}</td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_kec}}</td>
	</tr>
	<tr>
		<td>Kelurahan</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_kel}}</td>
	</tr>
	<tr>
		<td>RW</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_rw}}</td>
	</tr>
	<tr>
		<td>RT</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_rt}}</td>
	</tr>
	<tr>
		<td>Jalan</td>
		<td>:</td>
		<td>{{$wajibpajak->almt_jln}}</td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>{{$wajibpajak->user->username}}</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td>{{$wajibpajak->user->password}}</td>
	</tr>
	<tr>
		<td>Level</td>
		<td>:</td>
		<td>{{$wajibpajak->user->level}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$wajibpajak->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{$wajibpajak->updated_at}}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@stop