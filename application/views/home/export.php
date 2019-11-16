<?php header('Content-Type: application/vnd.ms-excel'); ?>
<?php header('Content-Disposition: attachment;filename='.strtolower(str_replace(' ', '-', $jenis_kegiatan['title'])).date('-Y-m-d').'.xls'); ?>
<table border="1">
	<tr>
		<th>NO</th>
		<th>JENIS KEGIATAN</th>
		<th>BAHAN</th>
		<th>VOLUME</th>
		<th>SATUAN</th>
		<th>HARGA SATUAN</th>
		<th>JUMLAH BIAYA</th>
	</tr>

	<?php $total = 0; $i = 1; ?>
	<?php foreach($list_kegiatan as $item) : ?>
		<?php $total += $item['jumlah_biaya']; ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $jenis_kegiatan['title']; ?></td>
			<td><?php echo $item['title']; ?></td>
			<td><?php echo $item['volume']; ?></td>
			<td><?php echo $item['satuan']; ?></td>
			<td><?php echo number_format($item['harga_satuan'], 2, ',', '.'); ?></td>
			<td><?php echo number_format($item['jumlah_biaya'], 2, ',', '.'); ?></td>
		</tr>
	<?php endforeach; ?>

	<tr>
		<td colspan="6" class="text-center">JUMLAH TOTAL</td>
		<td><?php echo number_format($total, 2, ',', '.'); ?></td>
	</tr>
</table>