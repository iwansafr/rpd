<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
	<a href="<?php echo base_url('export_excel'); ?>" class="btn btn-success mb-3"><i class="fa fa-file-excel-o"></i> Ekspor excel</a>
	<?php echo $this->session->flashdata('message'); ?>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <?php if ($this->session->has_userdata('user_id')) : ?>
		      <th scope="col">Action</th>
		    <?php endif; ?>
	      <th scope="col">Detail</th>
	      <th scope="col">Jenis kegiatan</th>
	      <th scope="col">Jumlah biaya</th>
	    </tr>
	  </thead>

	  <tbody>
	  	<?php $i = 1; ?>
	  	<?php foreach($jenis_kegiatan as $item) : ?>
	  		<?php
	  			$list_kegiatan = $this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $item['id']])->result_array();
	  			$jumlah = 0;
	  			foreach($list_kegiatan as $key) {
	  				$jumlah += $key['jumlah_biaya'];
	  			}
	  			$semua = 0;
	  			foreach ($this->db->get('list_kegiatan')->result_array() as $key) {
	  				$semua += $key['jumlah_biaya'];
	  			}
	  		?>
		    <tr>
		      <td scope="row"><?php echo $i++; ?></td>
		      <?php if ($this->session->has_userdata('user_id')) : ?>
			      <td>
			      	<a data-toggle="tooltip" title="Edit" class="btn btn-primary mb-1" href="<?php echo base_url('edit_jenis_kegiatan/'.$item['id']); ?>"><i class="fa fa-edit"></i></a>
			      	<a data-toggle="tooltip" title="Hapus" class="btn btn-danger mb-1" href="<?php echo base_url('delete_jenis_kegiatan/'.$item['id']); ?>" onclick="return window.confirm('Yakin mau dihapus?');"><i class="fa fa-trash"></i></a>
			      </td>
			    <?php endif; ?>
		      <td><a href="<?php echo base_url('detail_jenis_kegiatan/'.$item['id']); ?>"><i class="fa fa-external-link"></i> Detail</a></td>
		      <td><h5><?php echo $item['title']; ?></h5></td>
		      <td><strong>Rp <?php echo number_format($jumlah, 2, ',', '.'); ?></strong></td>
		    </tr>
	  	<?php endforeach; ?>
	  	<tr>
	  		<td colspan="<?php if($this->session->has_userdata('user_id')) { echo '5'; } else { echo '3'; } ?>" class="text-center"><h5>Jumlah total</h5></td>
	  		<td><strong>Rp <?php echo number_format($semua, 2, ',', '.'); ?></strong></td>
	  	</tr>
	  </tbody>

	</table>
</div>