<div class="container-fluid">

	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form input member
	</div>
	

	<form method="post" action=" <?php echo base_url('administrator/member/input_aksi') ?>">
		<div class="form-group">
			<label>id_member</label>
			<input type="text" name="id_member" placeholder="masukan id member" class="form-control">
			<?php echo form_error('id_member', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>nama</label>
			<input type="text" name="nama" placeholder="masukan nama" class="form-control">
			<?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>nama_paket</label>
			<input type="text" name="nama_paket" placeholder="masukan nama paket" class="form-control">
			<?php echo form_error('nama_paket', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>jenis_kelamin</label>
			<select></select>
			<input type="text" name="jenis_kelamin" placeholder="masukan jenis_kelamin" class="form-control">
			<?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>alamat</label>
			<input type="text" name="alamat" placeholder="masukan alamat" class="form-control">
			<?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>no_hp</label>
			<input type="text" name="no_hp" placeholder="masukan no_hp" class="form-control">
			<?php echo form_error('no_hp', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>tgl_daftar</label>
			<input type="date" name="tgl_daftar" placeholder="" class="form-control">
			<?php echo form_error('tgl_daftar', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>tgl_experied</label>
			<input type="date" name="tgl_experied" placeholder="" class="form-control">
			<?php echo form_error('tgl_experied', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>status</label>
			<input type="text" name="status" placeholder="" class="form-control">
			<?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>