<div class="container-fluid">

	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form input paket
	</div>
	

	<form method="post" action=" <?php echo base_url('administrator/paket/input_aksi') ?>">
		<div class="form-group">
			<label>id_paket</label>
			<input type="text" name="id_paket" placeholder="masukan id paket" class="form-control">
			<?php echo form_error('id_paket', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>nama_paket</label>
			<input type="text" name="nama_paket" placeholder="masukan nama paket" class="form-control">
			<?php echo form_error('nama_paket', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>harga_paket</label>
			<input type="text" name="harga_paket" placeholder="masukan harga paket" class="form-control">
			<?php echo form_error('harga_paket', '<div class="text-danger small" ml-3>') ?>
		</div>


		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>