<div class="form-group">
	<label for="">Nama</label>
	{!! Form::text('name', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Email</label>
	{!! Form::email('email', null,['class' => 'form-control','required']) !!}
</div>

<div class="form-group">
	<label for="">Role</label>
	{!! Form::select('role_id', $data['list_role'], null,['class' => 'form-control select2','required', 'placeholder' => 'Pilih Role']) !!}
</div>

<div class="form-group">
	<label for="">Password</label>
	{{ Form::password('password',['class' => 'form-control password','required']) }}
</div>

<div class="form-group">
	<label for="">Konfirmasi Password</label>
	{{ Form::password('confirm_password', ['class' => 'form-control confirm-password','required']) }}
	<small class="pesan-error" style="color: red; display: none;">konfirmasi password salah</small>
</div>