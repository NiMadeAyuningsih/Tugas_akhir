<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Laporan Transaksi</title>
 <style type="text/css">
	 body {
		 background-color: green;
		 font-family: Arial;
		 }
		 main {
		 width: 80%;
		 padding: 20px;
		 background-color: white;
		 min-height: 300px;
		 border-radius: 5px;
		 margin: 30px auto;
		 }
		 table {
		 border-top: solid thin #000;
		 border-collapse: collapse;
		 }
		 th, td {
		 border-top: border-top: solid thin #000;
		 padding: 6px 12px;
		 }
 </style>
</head>

	<body>
	 <main>
	 <h1>Laporan Excel</h1>
	 <p><a href="<?php echo base_url('administrator/laporan_transaksi/export_excel') ?>">Export ke Excel</a></p>
 <table border="1" width="100%">
 <thead>
 	<tr>
 		 <th>Id Transaksi</th>
		 <th>Id Member</th>
		 <th>Nama</th>
		 <th>Id Paket</th>
		 <th>Username</th>
		 <th>Total Bayar</th>
		 <th>Tgl_bayar</th>
		 <th>Nama Trainer</th>
		 <th>Status</th>
	</tr>
 </thead>
 <tbody>
 <?php $i=1; foreach($transaksi as $tr) { ?>
 <tr>
 <td><?php echo $tr->id_transaksi ?></td>
 <td><?php echo $tr->id_member ?></td>
 <td><?php echo $tr->nama ?></td>
 <td><?php echo $tr->id_paket ?></td>
 <td><?php echo $tr->username ?></td>
 <td><?php echo $tr->totalbayar ?></td>
 <td><?php echo $tr->tgl_bayar ?></td>
 <td><?php echo $tr->nama_trainer ?></td>
 <td><?php echo $tr->status ?></td>
 </tr>
 <?php $i++; } ?>

 </tbody>
 </table>
 	</main>
</body>
</html>