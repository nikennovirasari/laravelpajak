@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">


<div class="panel-heading">
<strong><a href="{{url('user')}}"><i class="fa text-default fa-chevron-left"></i></a>Perbaharui Data User</strong>	
</div>
	{!!Form::model($user,['url'=>'user/edit/'.$user->id,'class'=>'form-horizontal'])!!}
	@include('user.form')
	<div style="width: 100%;text-align: right;">
	<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui
	</button>
	<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi		
	</button>
	</div>
	{!!Form:: close()!!}

</div>
</div>
</div>
</div>
</div>
</section>

@stop