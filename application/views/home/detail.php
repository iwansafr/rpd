<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
		<a href="<?php echo base_url('export_detail_kegiatan/'.$jenis_kegiatan['id']); ?>" class="btn btn-success mb-3"><i class="fa fa-file-excel-o"></i> Ekspor excel</a>

		<?php echo $this->session->flashdata('message'); ?>

		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">NO</th>
		      <?php if ($this->session->userdata('user_id')) : ?>
		      	<th scope="col">ACTION</th>
		      <?php endif; ?>
		      <th scope="col">JENIS KEGIATAN</th>
		      <th scope="col">BAHAN</th>
		      <th scope="col">VOLUME</th>
		      <th scope="col">SATUAN</th>
		      <th scope="col">HARGA SATUAN</th>
		      <th scope="col">JUMLAH BIAYA</th>
		    </tr>
		  </thead>

		  <tbody>
		  	<?php $no = 1; ?>
  			<?php $detail_kegiatan = $this->db->get_where('detail_kegiatan', ['jenis_kegiatan_id' => $jenis_kegiatan['id']])->result_array(); ?>
      	<?php foreach($detail_kegiatan as $item) : ?>
      		<?php $this->db->where(['jenis_kegiatan_id' => $jenis_kegiatan['id'], 'detail_kegiatan_id' => $item['id']]); $list_kegiatan = $this->db->get('list_kegiatan')->result_array(); ?>

    			<?php foreach($list_kegiatan as $key) : ?>
				  	<tr>
				  		<td><?php echo $no++; ?></td>
				  		<?php if ($this->session->userdata('user_id')) : ?>
					  		<td>
					  			<a data-tooltip="tooltip" class="btn blue" href="<?php echo base_url('list/'.$key['id'].'/edit'); ?>"><i class="fa fa-edit"></i></a>
				      		<a data-tooltip="tooltip" class="btn red" href="<?php echo base_url('list/'.$key['id'].'/destroy'); ?>" onclick="return window.confirm('Yakin mau dihapus?');"><i class="fa fa-trash"></i></a>
					  		</td>
					  	<?php endif; ?>
				  		<td>
				  			<h5><?php echo $jenis_kegiatan['title']; ?></h5>		
				  		</td>
      				<td><?php echo $key['title']; ?></td>
      				<td><?php echo $key['volume']; ?></td>
      				<td><?php echo $key['satuan']; ?></td>
      				<td><?php echo number_format($key['harga_satuan'], 2, ',', '.'); ?></td>
      				<td><?php echo number_format($key['jumlah_biaya'], 2, ',', '.'); ?></td>
				  	</tr>
    			<?php endforeach; ?>

      	<?php endforeach; ?>
      	<?php $total = 0; foreach($this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $jenis_kegiatan['id']])->result_array() as $key) { $total += $key['jumlah_biaya']; } ?>

  			<tr>
  				<td class="text-center" colspan="6">
  					<strong>JUMLAH TOTAL</strong>
  				</td>
  				<td>
  					<strong>Rp <?php echo number_format($total, 2, ',', '.'); ?></strong>
  				</td>
  			</tr>

		  </tbody>
		</table>
	</div>
</div>