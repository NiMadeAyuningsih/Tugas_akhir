<div class="container-fluid">

    <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
	</div>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Selamat Datang</h4>
  <p>Selamat Datang <strong> <?php echo $username; ?> </strong> Di Aplikasi Pengolah Data Member Bayu Fitness, Anda Login Sebagai <strong><?php echo $level; ?></strong></p>
  <hr>
 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
  Control Panel
</button>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Control Panel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-d-3 text-info text-center">
        		<a href="<?php echo base_url() ?>"><p class="nav-link small text-info">MEMBER</p></a>
        		<i class="fas fa-3x fa-users"></i>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>