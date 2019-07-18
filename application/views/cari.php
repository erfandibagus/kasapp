
	<?php if (!empty($cari) && empty($result)) { ?>
		
		<h4>Hasil Pencarian</h4>
		<p>Kata Kunci <strong><?=ucwords($cari);?></strong></p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Jenis</th>
					<th scope="col">Jumlah</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="5" align="center">Tidak ada data</td>
				</tr>
			</tbody>
		</table>
	<?php } else if (!empty($cari) && !empty($result)) { ?>
		
		<h4>Hasil Pencarian</h4>
		<p>Kata Kunci <strong><?=ucwords($cari);?></strong></p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Jenis</th>
					<th scope="col">Jumlah</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $data) { ?>
				<tr>
					<td><?=$data->nomor;?></td>
					<td><?=$data->keterangan;?></td>
					<td><?=date('d/m/Y', strtotime($data->tanggal));?></td>
					<td><?=ucwords($data->jenis);?></td>
					<td>Rp <?=number_format($data->jumlah,2,',','.');?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<?=$halaman;?>
	<?php } ?>
