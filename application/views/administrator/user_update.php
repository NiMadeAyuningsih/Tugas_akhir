<div class="container-fluid">
	<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    <i class="fas fa-users"></i> form update user
	</div>

	<?php foreach ($user as $usr) :  ?>

		<form method="post" action=" <?php echo base_url('administrator/user/update_aksi') ?>">
			<div class="form-group">
				<label>username</label>
				<input type="hidden" name="id_user" value="<?php echo $usr->id_user ?>">
				
				<input type="text" name="username" class="form-control" value=" <?php echo $usr->username ?>">				
			</div>

			<div class="form-group">
				<label>password</label>
				<input type="password" name="password" class="form-control" value=" <?php echo $usr->password ?>">	
			</div>

			<div class="form-group">
				<label>email</label>
				<input type="text" name="email" class="form-control" value=" <?php echo $usr->email ?>">	
			</div>

			<div class="form-group">
				<label>level</label>
				<input type="text" name="level" class="form-control" value=" <?php echo $usr->level ?>">	
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>