<?php 

	header("Content-type: application/octet-stream");

	header("Content-Disposition: attachment; filename=$title.xls");

	header("Pragma: no-cache");

	header("Expires: 0");

?>

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