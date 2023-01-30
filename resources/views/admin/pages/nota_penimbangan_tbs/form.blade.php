<div class="form-group">
	<label for="">Tanggal</label>
	{!! Form::date('tanggal', null, ['class' => 'form-control datetimepicker','required']) !!}
</div>

<div class="form-group">
	<label for="">No Surat Jalan (TBS Keluar)</label>
	{!! Form::select('tbs_keluar_id', $data['list_tbs_keluar'], null, ['class' => 'form-control select2','required',  'placeholder' => 'Pilih No Surat Jalan']) !!}
</div>

<div class="form-group">
	<label for="">Perusahaan Mitra (Pembeli)</label>
	{!! Form::select('perusahaan_mitra_id', $data['list_perusahaan_mitra'], null, ['class' => 'form-control select2','required','placeholder' => 'Pilih Perusahaan Mitra']) !!}
</div>

<div class="form-group">
	<label for="">Harga</label>
	{{ Form::hidden('harga') }}
	{!! Form::text('harga1', isset($item)? $item->harga : null,['class' => 'form-control money','required',"data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
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

<div class="form-group">
	<label for="">Pendapatan</label>
	{{ Form::hidden('pendapatan') }}
	{!! Form::text('pendapatan1', isset($item)? $item->pendapatan : null,['class' => 'form-control money','required','readonly', "data-prefix"=>"Rp ", "data-thousands"=>".",
	"data-precision"=>"0"]) !!}
</div>