<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> user
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('administrator/user/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa plus fa-sm"></i> Tambah User</button>') ?>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Id user</th>
			<th>username</th>
			<th>password</th>
			<th>email</th>
			<th>level</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($user as $usr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $usr->id_user; ?></td>
				<td><?php echo $usr->username; ?></td>
				<td><?php echo $usr->password; ?></td>
				<td><?php echo $usr->email; ?></td>
				<td><?php echo $usr->level; ?></td>
				

				<td width=""><?php echo anchor('administrator/user/update/'.$usr->id_user,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width=""><?php echo anchor('administrator/user/delete/'.$usr->id_user,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</div>