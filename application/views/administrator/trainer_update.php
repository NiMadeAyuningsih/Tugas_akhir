<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update Trainer
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php foreach ($trainer as $tnr) :  ?>

		<form method="post" action=" <?php echo base_url('administrator/trainer/update_aksi') ?>">
			<div class="form-group">
				<label>nama_trainer</label>
				<input type="hidden" name="id_trainer" value="<?php echo $tnr->id_trainer ?>">
				
				<input type="text" name="nama_trainer" class="form-control" value=" <?php echo $tnr->nama_trainer ?>">				
			</div>

			<div class="form-group">
				<label>no_hp</label>
				<input type="text" name="no_hp" class="form-control" value=" <?php echo $tnr->no_hp ?>">	
			</div>

			<div class="form-group">
				<label>waktu</label>
				<input type="text" name="waktu" class="form-control" value=" <?php echo $tnr->waktu ?>">	
			</div>

			<div class="form-group">
				<label>bayaran</label>
				<input type="text" name="bayaran" class="form-control" value=" <?php echo $tnr->bayaran ?>">	
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>