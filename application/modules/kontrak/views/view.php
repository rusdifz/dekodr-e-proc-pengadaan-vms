<?php echo $this->session->flashdata('msgSuccesss')?>
<div class="formDashboard">
	<h1 class="formHeader">Pengadaan</h1>
	
		<table>
			<tr class="input-form">
				<td><label>Nama Paket Pengadaan</label></td>
				<td>
					: <?php echo $name;?>
				</td>
			</tr>
			<?php if ($no_spmk != '' || $start_spmk_date != '' || $spmk_file != '') { ?>
				<tr class="input-form">
					<td><label>*SPMK</label></td>
				</tr>
			<?php if ($no_spmk != '') { ?>
				<tr class="input-form">
					<td><label>No</label></td>
					<td>
						: <?php echo $no_spmk;?>
					</td>
				</tr>
			<?php } if ($start_spmk_date != '') { ?>
				<tr class="input-form">
					<td><label>Tanggal</label></td>
					<td>
						: <?php echo ($end_spmk_date != '') ? default_date($start_spmk_date).' sampai '.default_date($end_spmk_date) : $start_spmk_date;?>
					</td>
				</tr>
			<?php } if ($spmk_file != '') { ?>
				<tr class="input-form">
					<td><label>Dokumen</label></td>
					<td>
						: <?php echo '<a href="'.site_url('lampiran/spmk_file/'.$spmk_file).'">lampiran</a>';?>
					</td>
				</tr>
			<?php } ?>

			<?php } ?>
			<?php if ($no_cf != '' || $start_cf_date != '' || $contract_formation_file != '') { ?>
				<tr class="input-form">
					<td><label>*Contract Formation</label></td>
				</tr>
			<?php if ($no_cf != '') { ?>
				<tr class="input-form">
					<td><label>No</label></td>
					<td>
						: <?php echo $no_cf;?>
					</td>
				</tr>
			<?php } if ($start_cf_date != '') { ?>
				<tr class="input-form">
					<td><label>Tanggal</label></td>
					<td>
						: <?php echo ($end_cf_date != '') ? default_date($start_cf_date).' sampai '.default_date($end_cf_date) : $start_cf_date;?>
					</td>
				</tr>
			<?php } if ($contract_formation_file != '') { ?>
				<tr class="input-form">
					<td><label>Dokumen</label></td>
					<td>
						: <?php echo '<a href="'.site_url('lampiran/contract_formation_file/'.$contract_formation_file).'">lampiran</a>';?>
					</td>
				</tr>
			<?php } ?>

			<?php } ?>
			<tr class="input-form">

				<td><label>Tipe Pengadaan</label></td>
				<td>
					: <?php if($tipe_pengadaan == 'barang') {
								$tipe = 'Barang';
							} else if($tipe_pengadaan == 'jasa_konstruksi') {
								$tipe = 'Jasa Konstruksi';
							} else if($tipe_pengadaan == 'jasa_konsultasi') {
								$tipe = 'Jasa Konsultasi';
							} else if($tipe_pengadaan == 'jasa_lainnya') {
								$tipe = 'Jasa Konsultasi';
							} else if($tipe_pengadaan == 'jasa_konsultan_konstruksi') {
								$tipe = 'Jasa Konsultan Perencana/Pengawas Konstruksi';
							} else if($tipe_pengadaan == 'jasa_konsultan_non_konstruksi') {
								$tipe = 'Jasa Konsultan non-Konstruksi';
							} echo ucfirst($tipe);?>
				</td>
			</tr>
				<tr class="input-form">
					<td>
						Nilai HPS 
					</td>
					<td>:
						 Rp.<?php echo number_format($idr_value);?>
					</td>
				</tr>
				<tr class="input-form">
					<td>
						
					</td>
					<td>:
						<?php echo $kurs_symbol.' '.number_format($kurs_value)?>
					</td>
				</tr>
			<tr class="input-form">
				<td><label>Sumber Anggaran</label></td>
				<td>
					: <?php echo ($budget_source=='perusahaan')?'Perusahaan':'Non-Perusahaan';?>
				</td>
			</tr>
			<!-- <tr class="input-form">
				<td><label>No. BAHP</label></td>
				<td>
					: <?php echo $no_bahp;?>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Tanggal BAHP</label></td>
				<td>
					: <?php echo $bahp_date;?>
				</td>
			</tr> -->
			<tr class="input-form">
				<td><label>Pejabat Pengadaan</label></td>
				<td>
					: <?php echo $pejabat_pengadaan_name?>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Tahun Anggaran</label></td>
				<td>
					: <?php echo $budget_year?>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Budget Holder</label></td>
				<td>
					: <?php echo $budget_holder_name?>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Pemegang Cost Center</label></td>
				<td>
					: <?php echo $budget_spender_name?>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Metode Pengadaan</label></td>
				<td>
					: <?php echo $mekanisme_name?>
				</td>
			</tr>
			<tr  class="input-form">
				<td><label>Metode Evaluasi</label></td>
				<td>:

					<?php 
					$penilaian = array('scoring'=>'Scoring','non_scoring'=>'Non-Scoring');
					echo $penilaian[$evaluation_method];
					?>
				</td>
			</tr>
			<tr  class="input-form">
				<td><label>Metode Evaluasi scoring</label></td>
				<td>:

					<?php 

					if($evaluation_method_desc == "kualitas_terbaik"){
						echo "Kualitas/Teknik Terbaik";
					}else if($evaluation_method_desc == "kualitas"){
						echo "Kualitas/Teknik dan Harga";
					}else if($evaluation_method_desc == "harga"){
						echo "Harga Terendah";
					}
					?>
				</td>
			</tr>
			<!--<tr class="input-form">
				<td><label>Harga Penawaran Hasil Auction</label></td>
				<td>: <span>Dalam Rupiah :<?php echo $price_auction;?></span><br>
					: <span>Dalam Mata Uang Asing :<?php echo $price_auction_kurs;?> <?php echo $price_auction_kurs;?></span>
				</td>
			</tr>
			<tr class="input-form">
				<td><label>Harga Penawaran Hasil Negosiasi</label></td>
				<td>: <span>Dalam Rupiah :<?php echo $price_nego;?></span><br>
					: <span>Dalam Mata Uang Asing :<?php echo $price_nego_kurs;?> <?php echo $price_nego_kurs;?></span>
				</td>
			</tr>-->
		</table>
		
		<div class="buttonRegBox clearfix">
			<?php if($this->session->userdata('admin')['id_role']==3){ ?>
			<!-- <a href="<?php echo site_url('pengadaan/report/summary/index/'.$id);?>" class="editBtn lihatData"><i class="fa fa-file-text-o"></i>&nbsp;Summary</a> -->
			
			<a href="<?php echo site_url('kontrak/edit/'.$id);?>" class="editBtn"><i class='fa fa-cog'></i>&nbsp;Ubah</a>

			<!-- <a href="<?php echo site_url('pengadaan/reset/'.$id);?>" class="editBtn printSerti"><i class='fa fa-undo'></i>&nbsp;Reset</a> -->
			<?php } ?>
		</div>
		
</div>
<?php echo $table ?>