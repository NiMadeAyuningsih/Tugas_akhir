<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> Trainer
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('administrator/trainer/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa plus fa-sm"></i> Tambah Trainer</button>') ?>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Id trainer</th>
			<th>Nama trainer</th>
			<th>no hp</th>
			<th>waktu</th>
			<th>bayaran</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($trainer as $tnr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tnr->id_trainer; ?></td>
				<td><?php echo $tnr->nama_trainer; ?></td>
				<td><?php echo $tnr->no_hp; ?></td>
				<td><?php echo $tnr->waktu; ?></td>
				<td><?php echo $tnr->bayaran; ?></td>
				

				<td width=""><?php echo anchor('administrator/trainer/update/'.$tnr->id_trainer,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width=""><?php echo anchor('administrator/trainer/delete/'.$tnr->id_trainer,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</div>