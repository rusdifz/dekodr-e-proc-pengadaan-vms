<?php echo $this->session->flashdata('msgSuccess')?>

<?php echo $this->data_process->generate_progress('situ',$id_data)?>



<form method="POST">

	<div class="tableWrapper">

	

		<table class="tableData">

			<thead>

				<tr>

					<td>No</td>

					<td>Tanggal</td>

					<td>Alamat</td>

					<td>Lampiran</td>

					<td>Bukti Perpanjangan</td>

					<td>Masa Berlaku</td>

					<td><i class="fa fa-exclamation-triangle" style="color:#f39c12"></i></td>

					<td><i class="fa fa-check" style="color:#27ae60"></i></td>

					<td><i class="fa fa-times" style="color: #c1392b"></i></td>

				</tr>

			</thead>

			<tbody>

			<?php 

			if(count($situ_list)){

				foreach($situ_list as $row => $value){

				?>

					<tr>

						<td><?php echo $value['no'];?></td>

						<td><?php echo default_date($value['issue_date']);?></td>

						<td><?php echo $value['address'];?></td>
						<?php if ($value['situ_file'] != '') { ?>
							<td><a href="<?php echo base_url('lampiran/situ_file/'.$value['situ_file']);?>" target="_blank"><i class="fa fa-download"></i></a></td>
						<?php } else {?>
							<td>-</td>
						<?php } ?>
						<td><?php if($value['file_extension_situ']!=''){ ?><a href="<?php echo base_url('lampiran/file_extension_situ/'.$value['file_extension_situ']);?>" target="_blank"><i class="fa fa-download"></i></a><?php } ?></td>

						<td><?php echo ($value['expire_date']=='lifetime')?'Seumur Hidup': ((strtotime($value['expire_date']) > 0) ? default_date($value['expire_date']) : "-");?></td>

						<td><input type="checkbox" name="situ[<?php echo $value['id']?>][mandatory]" value="1" <?php echo $this->data_process->set_mandatory($value['data_status']);?>></td>

						<td class="actionBlock">

							<input type="radio" name="situ[<?php echo $value['id']?>][status]" value="1" <?php echo $this->data_process->set_yes_no(1,$value['data_status']);?>>

						</td>

						<td class="actionBlock">

							<input type="radio" name="situ[<?php echo $value['id']?>][status]" value="0" <?php echo $this->data_process->set_yes_no(0,$value['data_status']);?>>

						</td>

					</tr>

				<?php 

				}

			}else{?>

				<tr>

					<td colspan="11" class="noData">Data tidak ada</td>

				</tr>

			<?php }

			?>

			</tbody>

		</table>

		

	</div>



		<?php if($this->session->userdata('admin')['id_role']==1){?>
<div class="buttonRegBox clearfix">

	<input type="submit" value="Simpan" class="btnBlue" name="simpan">

</div>
<?php }?>

</form>