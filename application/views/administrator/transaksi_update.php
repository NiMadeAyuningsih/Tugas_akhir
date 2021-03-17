<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update transaksi
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php foreach($transaksi as $tr) : ?>

		<form method="post" action=" <?php echo base_url('administrator/transaksi/update_aksi') ?>">
			<div class="form-group">
				<input type="hidden" name="id_transaksi" value="<?php echo $tr->id_transaksi ?>">
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
			<option value="<?php echo $tr->id_paket; ?>"> <?php echo $pkt->id_paket; ?>	</option>
				<?php endforeach; ?>
			</select>
			</div>


			<div class="form-group">
			<label>id_user</label>
			<select class="form-control" name="id_user	">
			<?php 
				foreach ($user as $usr) : ?>
			<option value="<?php echo $tr->id_user; ?>"> <?php echo $usr->id_user; ?>	</option>
			<?php endforeach; ?>
			</select>
			</div>


			<div class="form-group">
				<label>status</label>
				<input type="text" name="alamat" class="form-control" value=" <?php echo $tr->status ?>">				
			</div>


			<div class="form-group">
				<label>tgl_bayar</label>
				<input type="date" name="tgl_bayar" class="form-control" value="<?php echo $tr->tgl_bayar?>">			
			</div>

			<div class="form-group">
			<label>id_trainer</label>
			<select class="form-control" name="id_trainer">
			<?php 
				foreach ($trainer as $tnr) : ?>
			<option value="<?php echo $tr->id_trainer; ?>"> <?php echo $tnr->id_trainer; ?>	</option>
			<?php endforeach; ?>
			</select>
			</div>
			
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>