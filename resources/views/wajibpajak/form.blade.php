<label class="col-sm-1 control-label">Nama</label>
	<div class="com-sm-8">
	{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"])!!}
	</div>
<label class="col-sm-1 control-label">NPWP</label>
	<div class="com-sm-8">
	{!!Form::text('npwp',null,['class'=>'form-control','placeholder'=>"NPWP"])!!}
	</div>
<label class="col-sm-1 control-label">Provinsi</label>
	<div class="com-sm-8">
	{!!Form::text('almt_prov',null,['class'=>'form-control','placeholder'=>"Provinsi"])!!}
	</div>
<label class="col-sm-1 control-label">Kota</label>
	<div class="com-sm-8">
	{!!Form::text('almt_kota',null,['class'=>'form-control','placeholder'=>"Kota"])!!}
	</div>
<label class="col-sm-1 control-label">Kecamatan</label>
	<div class="com-sm-8">
	{!!Form::text('almt_kec',null,['class'=>'form-control','placeholder'=>"Kecamatan"])!!}
	</div>
<label class="col-sm-1 control-label">Kelurahan</label>
	<div class="com-sm-8">
	{!!Form::text('almt_kel',null,['class'=>'form-control','placeholder'=>"Kelurahan"])!!}
	</div>
<label class="col-sm-1 control-label">RW</label>
	<div class="com-sm-8">
	{!!Form::text('almt_rw',null,['class'=>'form-control','placeholder'=>"RW"])!!}
	</div>
<label class="col-sm-1 control-label">RT</label>
	<div class="com-sm-8">
	{!!Form::text('almt_rt',null,['class'=>'form-control','placeholder'=>"RT"])!!}
	</div>
<label class="col-sm-1 control-label">Jalan</label>
	<div class="com-sm-8">
	{!!Form::text('almt_jln',null,['class'=>'form-control','placeholder'=>"Jalan"])!!}
	</div>
<label class="col-sm-1 control-label">Username</label>
	<div class="com-sm-10">
	{!!Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"])!!}
	</div>

<label class="col-sm-1 control-label">Password</label>
	<div class="com-sm-10">
	{!!Form::password('password',['class'=>'form-control','placeholder'=>"Password"])!!}
	</div>	
<br>
<label class="col-sm-1 control-label">Wajib Pajak</label>
	<div class="com-sm-10">
	
	{!!Form::text('level','2',['readonly'])!!}
	</div>			

