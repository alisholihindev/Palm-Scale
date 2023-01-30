<div class="form-group">
	<label for="">Tanggal dan Jam</label>
	{!! Form::text('tanggal_jam', null, ['class' => 'form-control datetimepicker','required']) !!}
</div>
<div class="form-group">
	<label for="">Sopir</label>
	{!! Form::select('sopir_id', $data['list_sopir'], null, ['class' => 'form-control select2','required','placeholder' => 'Pilih Sopir']) !!}
</div>

<div class="form-group">
	<label for="">Tara</label>
	{!! Form::number('tara', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Gross</label>
	{!! Form::number('gross', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Netto</label>
	{!! Form::number('netto', null,['class' => 'form-control','required','readonly']) !!}
</div>

@section('custom_js')
	<script src="{{ asset('admin_assets/js/custom_js/auth.js') }}"></script>
	<script src="{{ asset('vendor/maskMoney/jquery.maskMoney.min.js') }}"></script>

	<script>
	$('#hitung').click(function () {
		var gross = $("input[name=gross]").val();
		var tara = $("input[name=tara]").val();

		var netto = gross-tara;

		$("input[name=netto]").val(netto);
	});
	</script>
	<script>
		$(document).ready(function($) {
			$(".select2").select2({
				tags: true
			});
		});
	</script>
@endsection