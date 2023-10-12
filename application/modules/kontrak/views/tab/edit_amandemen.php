<div class="tab procView">
	<?php echo $this->utility->tabNav($tabNav,'amandemen');?>
	
	<div class="tableWrapper" style="margin-bottom: 20px;padding-left: 20px;">
	<?php echo $this->session->flashdata('msgSuccess')?>
		
		<div class="formDashboard">
			<form method="POST" enctype="multipart/form-data">
				<table>					
					<tr class="input-form">
						<td><label>No. Amandemen</label></td>
						<td>
							<input type="text" name="no" value="<?php echo ($this->form->get_temp_data('no'))?$this->form->get_temp_data('no'):$no;?>">
							<?php echo form_error('no'); ?>
						</td>
					</tr>
					<tr class="input-form">
						<td><label>Tanggal Amandemen</label></td>
						<td>
							<div>Dari Tanggal <?php echo $this->form->calendar(array('name'=>'start_date','value'=>($this->form->get_temp_data('start_date'))?$this->form->get_temp_data('start_date'):$start_date), false);?></div>
							<div style="margin-top: 10px;">Sampai Tanggal <?php echo $this->form->calendar(array('name'=>'end_date','value'=>($this->form->get_temp_data('end_date'))?$this->form->get_temp_data('end_date'):$end_date), false);?></div>
							<?php echo form_error('start_date'); ?>
							<?php echo form_error('end_date'); ?>
						</td>
					</tr>
					<tr class="input-form">
						<td><label>Dokumen Amandemen</label></td>
						<td>
							<?php echo $this->form->file(array('name'=>'amandemen_file','value'=>($this->form->get_temp_data('amandemen_file'))?$this->form->get_temp_data('amandemen_file'):$amandemen_file));?>
							<?php echo form_error('amandemen_file'); ?>
						</td>
					</tr>
				</table>
				<div class="buttonRegBox clearfix">
					<input type="submit" value="Simpan" class="btnBlue" name="Update">
				</div>
			</form>
		</div>
	</div>
</div>