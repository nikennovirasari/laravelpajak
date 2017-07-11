<label class="col-sm-1 control-label">NOP</label>
<div class="com-sm-8">
		{!!Form::text('nop',null,['class'=>'form-control','placeholder'=>"NOP"])!!}
</div>
<br>

<label class="col-sm-2 control-label">Tgl Jatuh Tempo</label>
<div class="com-sm-8">
        {!! Form::date('tgl_jthtempo', \Carbon\Carbon::now()) !!}
</div>
<br>

<label class="col-sm-1 control-label">Provinsi</label>
<div class="com-sm-8">
		{!!Form::text('ltk_prov',null,['class'=>'form-control','placeholder'=>"Provinsi"])!!}
</div>



<label class="col-sm-1 control-label">Kota</label>
<div class="com-sm-8">
		{!!Form::text('ltk_kota',null,['class'=>'form-control','placeholder'=>"Kota"])!!}
	</div>



<label class="col-sm-1 control-label">Kecamatan</label>
<div class="com-sm-8">
		{!!Form::text('ltk_kec',null,['class'=>'form-control','placeholder'=>"Kecamatan"])!!}
	</div>



<label class="col-sm-1 control-label">Kelurahan</label>
<div class="com-sm-8">
		{!!Form::text('ltk_kel',null,['class'=>'form-control','placeholder'=>"Kelurahan"])!!}
	</div>



<label class="col-sm-1 control-label">RW</label>
<div class="com-sm-8">
		{!!Form::text('ltk_rw',null,['class'=>'form-control','placeholder'=>"RW"])!!}
	</div>



<label class="col-sm-1 control-label">RT</label>
<div class="com-sm-8">
		{!!Form::text('ltk_rt',null,['class'=>'form-control','placeholder'=>"RT"])!!}
	</div>



<label class="col-sm-1 control-label">Jalan</label>
<div class="com-sm-8">
		{!!Form::text('ltk_jln',null,['class'=>'form-control','placeholder'=>"Jalan"])!!}
	</div>



<label class="col-sm-1 control-label">Bangunan</label>
<div class="com-sm-8">
		{!!Form::select('bangunan_id',$bangunan->listIDDanKelas(),null,['class'=>'form-control','placeholder'=>"ID(Kelas)"])!!}
	</div>



<label class="col-sm-1 control-label">Tanah</label>
<div class="com-sm-8">
		{!!Form::select('tanah_id',$tanah->listIDDanKelas(),null,['class'=>'form-control','placeholder'=>"ID(Kelas)"])!!}
	</div>
