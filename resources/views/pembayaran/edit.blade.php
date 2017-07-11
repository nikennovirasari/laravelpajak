@extends('master2')
@section('container')

<section class='content-wrapper'>
	<div class="row">
<div class="col-md-12">
	<div class="box">
	<div class="box box-info">
                <div class="box-header with-border">


<div class="panel-heading">
<strong><a href="{{url('pembayaran')}}"><i class="fa text-default fa-chevron-left"></i></a>Perbaharui Data Pembayaran</strong>	
</div>
	{!!Form::model($pembayaran,['url'=>'pembayaran/edit/'.$pembayaran->id,'class'=>'form-horizontal'])!!}
	@include('pembayaran.form')
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