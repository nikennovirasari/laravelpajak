@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data User</h3>
                  
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          	<th>No.</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       		<?php $x=1; ?>
							@foreach ($data as $user)
							<tr>
								<td>{{$x++}}</td>
								<td>{{$user->username or 'username kosong'}}</td>
								<td>{{$user->password or 'password kosong'}}</td>
								<td>{{$user->level or 'level kosong'}}</td>
								<td>
									<div class="btn-group" role="group">
										<a href='{{url("user/edit/{$user->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
										<a href='{{url("user/{$user->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
										
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