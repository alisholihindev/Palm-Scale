<div class="form-group">
	<label for="">Tanggal dan Jam</label>
	{!! Form::text('tanggal_jam', null, ['class' => 'form-control datetimepicker','required']) !!}
</div>
<div class="form-group">
	<label for="">Sopir</label>
	{!! Form::select('sopir_id', $data['list_sopir'], null, ['class' => 'form-control select2','required','placeholder' => 'Pilih Sopir']) !!}
</div>

<div class="form-group">
	<label for="">Harga</label>
	{{ Form::hidden('harga') }}
	{!! Form::text('harga1', isset($item)? $item->harga : null,['class' => 'form-control money','id'=>'sopir','required',"data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>

<div class="form-group">
	<label for="">Biaya Bongkar /Ton</label>
	{{ Form::hidden('biaya_bongkar') }}
	{!! Form::text('biaya_bongkar1', isset($item)? $item->biaya_bongkar : null,['class' => 'form-control money','required',"data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>

<div class="form-group">
	<label for="">Potongan</label>
	<div class="input-group">
		{!! Form::number('potongan', null,['class' => 'form-control','required',"step"=>"any"]) !!}
		<div class="input-group-prepend">
			<div class="input-group-text">
				%
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	<label for="">Gross</label>
	{!! Form::number('gross', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Tara</label>
	{!! Form::number('tara', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Netto 1</label>
	{!! Form::number('netto_1', null,['class' => 'form-control','required','readonly']) !!}
</div>

<div class="form-group">
	<label for="">Netto 2</label>
	{!! Form::number('netto_2', null,['class' => 'form-control','required','readonly']) !!}
</div>

<div class="form-group">
	<label for="">Total Harga</label>
	{{ Form::hidden('total_biaya') }}
	{!! Form::text('total_biaya1', isset($item)? $item->total_biaya : null,['class' => 'form-control money','required','readonly', "data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>

<div class="form-group">
	<label for="">Total Biaya Bongkar</label>
	{{ Form::hidden('total_biaya_bongkar') }}
	{!! Form::text('total_biaya_bongkar1', isset($item)? $item->total_biaya_bongkar : null,['class' => 'form-control money','required', "data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>

<div class="form-group">
	<label for="">Total Akhir</label>
	{{ Form::hidden('total_akhir') }}
	{!! Form::text('total_akhir1', isset($item)? $item->total_akhir : null,['class' => 'form-control money','required','readonly', "data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>

@section('custom_js')
<script>
    $('#hitung').click(function () {
      var harga = $("input[name=harga1]").val().replace("Rp ", "").replace(/\./g,'');
      var biaya_bongkar = $("input[name=biaya_bongkar1]").val().replace("Rp ", "").replace(/\./g,'');
      var total_biaya_bongkar = $("input[name=total_biaya_bongkar1]").val().replace("Rp ", "").replace(/\./g,'');
      var gross = $("input[name=gross]").val();
      var tara = $("input[name=tara]").val();
      var potongan = $("input[name=potongan]").val();


      var netto_1 = gross-tara;
      var netto_2 = Math.round(netto_1-(netto_1*(potongan/100)));
      var total_harga = harga * netto_2;
      var total_akhir = total_harga - total_biaya_bongkar;

      $("input[name=netto_1]").val(netto_1);
      $("input[name=netto_2]").val(netto_2);
      $("input[name=total_biaya1]").val(total_harga);
      $("input[name=total_biaya]").val(total_harga);
      $("input[name=total_biaya_bongkar1]").val(total_biaya_bongkar);
      $("input[name=total_biaya_bongkar]").val(total_biaya_bongkar);
      $("input[name=total_akhir1]").val(total_akhir);
      $("input[name=total_akhir]").val(total_akhir);
      $("input[name=harga]").val(harga);
      $("input[name=biaya_bongkar]").val(biaya_bongkar);
    });

    $(document).on("keyup", "[name='harga1']", function(){
        $("[name='harga1']").maskMoney();
    });

    $(document).on("keyup", "[name='biaya_bongkar1']", function(){
        $("[name='biaya_bongkar1']").maskMoney();
    });
    $(document).bind("change", "[name='total_biaya1']", function(){
        $("[name='total_biaya1']").maskMoney();
    });
    $(document).bind("keyup", "[name='total_biaya_bongkar1']", function(){
        $("[name='total_biaya_bongkar1']").maskMoney();
    });
    $(document).bind("change", "[name='total_akhir1']", function(){
        $("[name='total_akhir1']").maskMoney();
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