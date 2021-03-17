<div class="container-fluid">

	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form input Trainer
	</div>
	

	<form method="post" action=" <?php echo base_url('administrator/trainer/input_aksi') ?>">
		<div class="form-group">
			<label>id_trainer</label>
			<input type="text" name="id_trainer" placeholder="masukan id Trainer" class="form-control">
			<?php echo form_error('id_trainer', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>nama_trainer</label>
			<input type="text" name="nama_trainer" placeholder="masukan nama trainer" class="form-control">
			<?php echo form_error('nama_trainer', '<div class="text-danger small" ml-3>') ?>
		</div>

			<div class="form-group">
			<label>no_hp</label>
			<input type="text" name="no_hp" placeholder="masukan no_hp" class="form-control">
			<?php echo form_error('no_hp', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>waktu</label>
			<input type="text" name="waktu" placeholder="masukan waktu" class="form-control">
			<?php echo form_error('waktu', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>bayaran</label>
			<input type="text" name="bayaran" placeholder="masukan harga bayaran" class="form-control">
			<?php echo form_error('bayaran', '<div class="text-danger small" ml-3>') ?>
		</div>


		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>