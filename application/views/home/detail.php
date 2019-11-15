<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Detail kegiatan</a>
		  </li>
		</ul>
  </div>
  <div class="card-body" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
		  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<a href="" class="btn btn-success mb-3"><i class="fa fa-file-excel-o"></i> Ekspor excel</a>
				<?php echo $this->session->flashdata('message'); ?>
				<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">JENIS KEGIATAN</th>
				      <th scope="col">VOLUME</th>
				      <th scope="col">SATUAN</th>
				      <th scope="col">HARGA SATUAN</th>
				      <th scope="col">JUMLAH BIAYA</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<tr>
				  		<td colspan="5">
				      	<h5><?php echo $jenis_kegiatan['title']; ?></h5>
				  		</td>
				  	</tr>
      			<?php $detail_kegiatan = $this->db->get_where('detail_kegiatan', ['jenis_kegiatan_id' => $jenis_kegiatan['id']])->result_array(); ?>
		      	<?php foreach($detail_kegiatan as $item) : ?>
		      		<?php $this->db->where(['jenis_kegiatan_id' => $jenis_kegiatan['id'], 'detail_kegiatan_id' => $item['id']]); $list_kegiatan = $this->db->get('list_kegiatan')->result_array(); ?>
					  	<tr>
					  		<td style="background: #f2f2f2;" colspan="5">
					      	<h6 class="pl-2"><?php echo $item['title']; ?></h6>
					  		</td>
					  	</tr>
	      			<?php $total = 0; foreach($list_kegiatan as $key) : ?>
						  	<tr>
		      				<td><?php echo $key['title']; ?></td>
		      				<td><?php echo $key['volume']; ?></td>
		      				<td><?php echo $key['satuan']; ?></td>
		      				<td><?php echo number_format($key['harga_satuan'], 2, ',', '.'); ?></td>
		      				<td><?php echo number_format($key['jumlah_biaya'], 2, ',', '.'); ?></td>
						  	</tr>
		      			<?php $total += $key['jumlah_biaya']; ?>
	      			<?php endforeach; ?>
		      	<?php endforeach; ?>
      			<tr>
      				<td class="text-center" colspan="4">
      					<strong>JUMLAH TOTAL</strong>
      				</td>
      				<td><strong>Rp <?php echo number_format($total, 2, ',', '.'); ?></strong></td>
      			</tr>
				  </tbody>
				</table>
			</div>
		</div>
  </div>
</div>