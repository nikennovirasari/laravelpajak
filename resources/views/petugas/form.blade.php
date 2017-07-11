<label class="col-sm-1 control-label">Keterangan</label>
	<div class="com-sm-8">
	{!!Form::text('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"])!!}
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
<label class="col-sm-1 control-label">Petugas</label>
	<div class="com-sm-10">
	{!!Form::text('level','1',['readonly'])!!}
	</div>			

