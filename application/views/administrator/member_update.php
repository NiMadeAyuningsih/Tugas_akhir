<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update member
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php foreach($member as $mbr) : ?>

		<form method="post" action=" <?php echo base_url('administrator/member/update_aksi') ?>">
			<div class="form-group">
				<label>nama</label>
				<input type="hidden" name="id_member" value="<?php echo $mbr->id_member ?>">
				<input type="text" name="nama" class="form-control" value=" <?php echo $mbr->nama ?>">				
			</div>

			<div class="form-group">
			<label>nama_paket</label>
			<select class="form-control" name="nama_paket">
			<?php 
				foreach ($paket as $pkt) : ?>
			<option value="<?php echo $pkt->nama_paket; ?>"> <?php echo $pkt->nama_paket; ?>	</option>
				<?php endforeach; ?>

			</select>
		</div>

		<div class="form-group">
			<label>nama_trainer</label>
			<select class="form-control" name="nama_trainer">
			<?php 
		foreach ($trainer as $tnr) : ?>
			<option value="<?php echo $tnr->nama_trainer; ?>"> <?php echo $tnr->nama_trainer; ?>	</option>
				<?php endforeach; ?>
			</select>

		</div>
			<div class="form-group">
			<label>jenis_kelamin</label>			
			<input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki" <br> 
			<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan" <br> 
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
				<input type="date" name="tgl_daftar" class="form-control" value="<?php echo $mbr->tgl_daftar ?>">			
			</div>


			<div class="form-group">
				<label>tgl_experied</label>
				<input type="date" name="tgl_experied" class="form-control" value="<?php echo $mbr->tgl_experied ?>">		
			</div>

			<div class="form-group">
				<label>status</label>
				<input type="text" name="status" class="form-control" value=" <?php echo $mbr->status ?>">			
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>