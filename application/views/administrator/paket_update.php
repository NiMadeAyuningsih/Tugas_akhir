<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update paket
	</div>

	<?php foreach ($paket as $pkt) :  ?>

		<form method="post" action=" <?php echo base_url('administrator/paket/update_aksi') ?>">
			<div class="form-group">
				<label>nama_paket</label>
				<input type="hidden" name="id_paket" value="<?php echo $pkt->id_paket ?>">
				
				<input type="text" name="nama_paket" class="form-control" value=" <?php echo $pkt->nama_paket ?>">				
			</div>

			<div class="form-group">
				<label>harga_paket</label>
				<input type="text" name="harga_paket" class="form-control" value=" <?php echo $pkt->harga_paket ?>">	
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>