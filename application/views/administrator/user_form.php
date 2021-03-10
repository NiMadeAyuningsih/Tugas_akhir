<div class="container-fluid">

	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form input user
	</div>
	

	<form method="post" action=" <?php echo base_url('administrator/user/input_aksi') ?>">
		<div class="form-group">
			<label>id_user</label>
			<input type="text" name="id_user" placeholder="masukan id user" class="form-control">
			<?php echo form_error('id_user', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>username</label>
			<input type="text" name="username" placeholder="masukan username" class="form-control">
			<?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>password</label>
			<input type="password" name="password" placeholder="masukan password" class="form-control">
			<?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" placeholder="masukan email anda" class="form-control">
			<?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>level</label>
			<input type="text" name="level" placeholder="isi level anda" class="form-control">
			<?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
		</div>


		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>