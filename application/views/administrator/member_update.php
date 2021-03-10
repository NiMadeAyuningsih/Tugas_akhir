<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update member
	</div>

	<?php foreach($member as $mbr) : ?>

		<form method="post" action=" <?php echo base_url('administrator/member/update_aksi') ?>">
			<div class="form-group">
				<label>nama</label>
				<input type="hidden" name="id_member" value="<?php echo $mbr->id_member ?>">
				<input type="text" name="nama" class="form-control" value=" <?php echo $mbr->nama ?>">				
			</div>

			<div class="form-group">
				<label>nama paket</label>
				<input type="text" name="nama_paket" class="form-control" value=" <?php echo $mbr->nama_paket ?>">	
			</div>

			<div class="form-group">
				<label>jenis kelamin</label>
				<input type="text" name="jenis_kelamin" class="form-control" value=" <?php echo $mbr->jenis_kelamin ?>">				
			</div>

			<div class="form-group">
				<label>alamat</label>
				<input type="text" name="alamat" class="form-control" value=" <?php echo $mbr->alamat ?>">				
			</div>

			<div class="form-group">
				<label>no hp</label>
				<input type="text" name="no_hp" class="form-control" value=" <?php echo $mbr->no_hp ?>">				
			</div>

			<div class="form-group">
				<label>tgl_daftar</label>
				<input type="date" name="tgl_daftar" class="form-control" value=" <?php echo $mbr->tgl_daftar ?>">			
			</div>

			<div class="form-group">
				<label>tgl_experied</label>
				<input type="date" name="tgl_experied" class="form-control" value=" <?php echo $mbr->tgl_experied ?>">		
			</div>

			<div class="form-group">
				<label>status</label>
				<input type="text" name="status" class="form-control" value=" <?php echo $mbr->status ?>">			
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>