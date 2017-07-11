<label class="col-sm-1 control-label">Tempat Bayar</label>
	<div class="com-sm-8">
	{!!Form::text('tmp_bayar',null,['class'=>'form-control','placeholder'=>"Tempat Bayar"])!!}
	</div>



<label class="col-sm-2 control-label">Tanggal Bayar</label>
	<div class="com-sm-8">
	
	{!! Form::date('tgl_bayar', \Carbon\Carbon::now()) !!}
	</div>

<label class="col-sm-1 control-label">Status</label>
	<div class="com-sm-8">
	{!!Form::text('status',null,['class'=>'form-control','placeholder'=>"Status"])!!}
	</div>

<label class="col-sm-1 control-label">ID Petugas</label>
<div class="com-sm-8">
		{!!Form::select('petugas_id',$petugas->listIDPetugas(),null,['class'=>'form-control','placeholder'=>"ID(Keterangan)"])!!}
	</div>

<label class="col-sm-1 control-label">ID WajibPajak</label>
<div class="com-sm-8">
		{!!Form::select('wajibpajak_id',$wajibpajak->listIDWajibpajak(),null,['class'=>'form-control','placeholder'=>"ID(Nama)"])!!}
	</div>

<label class="col-sm-1 control-label">ID Pajak</label>
<div class="com-sm-8">
		{!!Form::select('pajak_id',$pajak->listIDPajak(),null,['class'=>'form-control','placeholder'=>"ID(nop)"])!!}
	</div>