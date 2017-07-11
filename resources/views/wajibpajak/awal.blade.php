@extends('master2')
@section('container')
<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Wajib Pajak</h3>
                  <a href="{{url('wajibpajak/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Wajib Pajak</i></a>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          	<th>No.</th>
							<th>Nama</th>
							<th>NPWP</th>
							<th>Alamat</th>
							<th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       		<?php $x=1; ?>
							@foreach ($semuaWajibpajak as $wajibpajak)
							<tr>
								<td>{{$x++}}</td>
								<td>{{$wajibpajak->nama or 'nama kosong'}}</td>
								<td>{{$wajibpajak->npwp or 'npwp kosong'}}</td>
								<td>{{$wajibpajak->almt_jln or 'jalan kosong'}}</td>
								
								<td>
									<div class="btn-group" role="group">
										<a href='{{url("wajibpajak/edit/{$wajibpajak->id}")}}' class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
										<a href='{{url("wajibpajak/{$wajibpajak->id}")}}' class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
										<a href='{{url("wajibpajak/hapus/{$wajibpajak->id}")}}' class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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