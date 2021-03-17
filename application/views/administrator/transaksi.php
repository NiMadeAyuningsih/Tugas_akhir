<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> Transaksi
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('administrator/transaksi/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa plus fa-sm"></i> Tambah transaksi</button>') ?>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Id Transaksi</th>
			<th>Id Member</th>
			<th>Nama</th>
			<th>Id Paket</th>
			<th>Username</th>
			<th>Total Bayar</th>
			<th>Tgl Bayar</th>
			<th>Status</th>
			<th>NAMA TRAINER</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($transaksi as $tr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->id_transaksi; ?></td>
				<td><?php echo $tr->id_member; ?></td>
				<td><?php echo $tr->nama; ?></td>
				<td><?php echo $tr->id_paket; ?></td>
				<td><?php echo $tr->username; ?></td>
				<td><?php echo $tr->totalbayar; ?></td>
				<td><?php echo $tr->tgl_bayar; ?></td>
				<td><?php echo $tr->status; ?></td>
				<td><?php echo $tr->nama_trainer; ?></td>
				
				

				<td width=""><?php echo anchor('administrator/transaksi	/update/'.$tr->id_transaksi	,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width=""><?php echo anchor('administrator/transaksi	/delete/'.$tr->id_transaksi	,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</div>