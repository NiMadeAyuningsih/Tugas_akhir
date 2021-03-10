<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> paket
	</div>

	<?php echo anchor('administrator/paket/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa plus fa-sm"></i> Tambah paket</button>') ?>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Id paket</th>
			<th>Nama paket</th>
			<th>harga Paket</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($paket as $pkt) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pkt->id_paket; ?></td>
				<td><?php echo $pkt->nama_paket; ?></td>
				<td><?php echo $pkt->harga_paket; ?></td>
				

				<td width=""><?php echo anchor('administrator/paket/update/'.$pkt->id_paket,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width=""><?php echo anchor('administrator/paket/delete/'.$pkt->id_paket,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</div>