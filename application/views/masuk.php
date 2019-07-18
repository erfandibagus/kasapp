
<h4>Daftar Pemasukan <a href="<?=base_url('p/pemasukan');?>" title="Tambah"><i class="fa fa-plus-circle"></i></a></h4>
	<?php if ($this->session->flashdata('message')) { ?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
		</div>
	<?php } ?>
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">Nomor</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Jumlah</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($result as $data) { ?>
		<tr>
			<td><?=$data->nomor;?></td>
			<td><?=$data->keterangan;?></td>
			<td><?=date('d/m/Y', strtotime($data->tanggal));?></td>
			<td>Rp <?=number_format($data->jumlah,2,',','.');?></td>
			<td>
				<a href="<?=base_url('p/ubah_pemasukan/'.$data->nomor);?>"><span class="badge badge-pill badge-primary">Ubah</span></a> &nbsp; 
				<a href="<?=base_url('p/hapus_pemasukan/'.$data->nomor);?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
	<thead>
	<?php
		error_reporting(0);
		foreach ($ttl as $total) {
			$jumlah += $total->jumlah;
		}
	?>
		<tr>
			<th colspan="3" scope="col">TOTAL <small>(Pemasukan)</small></th>
			<th scope="col">Rp. <?=number_format($jumlah,2,',','.');?></th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
</table>
<?=$halaman;?>
