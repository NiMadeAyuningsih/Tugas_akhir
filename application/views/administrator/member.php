<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> Member
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<?php echo anchor('administrator/member/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa plus fa-sm"></i> Tambah Member</button>') ?>

<div class="col-md-3">
</div>
<div class="col-md-6">
	<form action="<?php echo base_url('administrator/member/cari') ?>" type="GET"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" name='keyword'>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
</div>
	<br>
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Id Member</th>
			<th>Nama</th>
			<th>Nama Paket</th>
			<th>Nama Trainer</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Tanggal Daftar</th>
			<th>Tanggal Experied</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($member as $mbr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $mbr->id_member; ?></td>
				<td><?php echo $mbr->nama; ?></td>
				<td><?php echo $mbr->nama_paket; ?></td>
				<td><?php echo $mbr->nama_trainer; ?></td>
				<td><?php echo $mbr->jenis_kelamin; ?></td>
				<td><?php echo $mbr->alamat; ?></td>
				<td><?php echo $mbr->no_hp; ?></td>
				<td><?php echo $mbr->tgl_daftar; ?></td>
				<td><?php echo $mbr->tgl_experied; ?></td>
				<td><?php echo $mbr->status; ?></td>

				<td width=""><?php echo anchor('administrator/member/update/'.$mbr->id_member,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width=""><?php echo anchor('administrator/member/delete/'.$mbr->id_member,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td> 	
			</tr>
		<?php endforeach; ?>
	</table>

</div>