<div class="container-fluid">

	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form input transaksi
	</div>
	

	<form method="post" action=" <?php echo base_url('administrator/transaksi/input_aksi') ?>">
		<div class="form-group">
			<label>id_transaksi</label>
			<input type="text" name="id_transaksi" placeholder="masukan id_transaksi" class="form-control">
			<?php echo form_error('id_transaksi	', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>id_member</label>
			<select class="form-control" name="id_member">
			<?php 
		foreach ($member as $mbr) : ?>
			<option value="<?php echo $mbr->id_member; ?>"> <?php echo $mbr->id_member; ?>	</option>
				<?php endforeach; ?>

			</select>
		</div>

		<div class="form-group">
			<label>id_paket</label>
			<select class="form-control" name="id_paket">
			<?php 
		foreach ($paket as $pkt) : ?>
			<option value="<?php echo $pkt->id_paket; ?>"> <?php echo $pkt->id_paket; ?>	</option>
				<?php endforeach; ?>

			</select>
		</div>

		<div class="form-group">
			<label>id_user</label>
			<select class="form-control" name="id_user">
			<?php 
		foreach ($user as $usr) : ?>
			<option value="<?php echo $usr->id_user; ?>"> <?php echo $usr->id_user; ?>	</option>
				<?php endforeach; ?>

			</select>
		</div>

		
		<div class="form-group">
			<label>status</label>
			<input type="text" name="status" placeholder="masukan status" class="form-control">
			<?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>tgl_bayar</label>
			<input type="date" name="tgl_bayar" placeholder="masukan tgl_bayar" class="form-control">
			<?php echo form_error('tgl_bayar', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>id_trainer</label>
			<select class="form-control" name="id_trainer">
			<?php 
		foreach ($trainer as $tnr) : ?>
			<option value="<?php echo $tnr->id_trainer; ?>"> <?php echo $tnr->id_trainer; ?>	</option>
				<?php endforeach; ?>

			</select>
		</div>




		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>