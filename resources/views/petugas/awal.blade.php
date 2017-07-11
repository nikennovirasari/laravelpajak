@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Petugas</h3>
                  <a href="{{url('petugas/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Petugas</i></a>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          	<th>No.</th>
							<th>Keterangan</th>
							<th>Username</th>
							<th>Password</th>
							
							<th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       		<?php $x=1; ?>
							@foreach ($semuaPetugas as $petugas)
							<tr>
								<td>{{$x++}}</td>
								<td>{{$petugas->keterangan or 'keterangan kosong'}}</td>
								<td>{{$petugas->user->username or 'username kosong'}}</td>
								<td>{{$petugas->user->password or 'password kosong'}}</td>
								
								<td>
									<div class="btn-group" role="group">
										<a href='{{url("petugas/edit/{$petugas->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
										<a href='{{url("petugas/{$petugas->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
										<a href='{{url("petugas/hapus/{$petugas->id}")}}' class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
               
</div>
</div>
</div>
</section>
	
	
@stop