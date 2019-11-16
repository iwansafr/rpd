<?php header('Content-Type: application/vnd.ms-excel'); ?>
<?php header('Content-Disposition: attachment;filename='.'semua-data-'.date('-Y-m-d').'.xls'); ?>
<table border="1">
	<tr>
		<th>NO</th>
		<th>JENIS KEGIATAN</th>
		<th>BAHAN</th>
		<th>VOLUME</th>
		<th>SATUAN</th>
		<th>HARGA SATUAN</th>
		<th>JUMLAH HARGA</th>
	</tr>

	<?php $i = 1; $total = 0; ?>
	<?php foreach($jenis_kegiatan as $item) : ?>
		<?php $list_kegiatan = $this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $item['id']])->row_array(); ?>
		<?php $total += $list_kegiatan['jumlah_biaya']; ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $item['title']; ?></td>
			<td><?php echo $list_kegiatan['title']; ?></td>
			<td><?php echo $list_kegiatan['volume']; ?></td>
			<td><?php echo $list_kegiatan['satuan']; ?></td>
			<td><?php echo number_format($list_kegiatan['harga_satuan'], 2, ',', '.'); ?></td>
			<td><?php echo number_format($list_kegiatan['jumlah_biaya'], 2, ',', '.'); ?></td>
		</tr>
	<?php endforeach; ?>

	<tr>
		<td colspan="6">JUMLAH TOTAL</td>
		<td><?php echo 'Rp '.number_format($total, 2, ',', '.'); ?></td>
	</tr>
</table>