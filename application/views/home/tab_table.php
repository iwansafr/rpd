<a href="<?php echo base_url('export_excel'); ?>" class="btn btn-success mb-3"><i class="fa fa-file-excel-o"></i> Ekspor excel</a>
<?php echo $this->session->flashdata('message'); ?>
<div class="table-wrapper">
	<table class="table">
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
			      	<a data-tooltip="tooltip" class="btn blue" href="<?php echo base_url('kegiatan/'.$item['id'].'/edit'); ?>"><i class="fa fa-edit"></i></a>
			      	<a data-tooltip="tooltip" class="btn red" href="<?php echo base_url('kegiatan/'.$item['id'].'/destroy'); ?>" onclick="return window.confirm('Yakin mau dihapus?');"><i class="fa fa-trash"></i></a>
			      </td>
			    <?php endif; ?>
		      <td><a href="<?php echo base_url('kegiatan/'.$item['id'].'/detail'); ?>"><i class="fa fa-external-link"></i> Detail</a></td>
		      <td><h6 style="font-weight: bold;"><?php echo $item['title']; ?></h6></td>
		      <td><strong>Rp <?php echo number_format($jumlah, 2, ',', '.'); ?></strong></td>
		    </tr>
	  	<?php endforeach; ?>
	  	<tr>
	  		<td colspan="<?php if($this->session->has_userdata('user_id')) { echo '4'; } else { echo '3'; } ?>" style="text-align: center;text-transform: uppercase;">Jumlah total</td>
	  		<td><strong>Rp <?php echo number_format($semua, 2, ',', '.'); ?></strong></td>
	  	</tr>
	  </tbody>
	</table>
</div>