<div class="formDashboard">
	<h1 class="formHeader">Tambah Bidang</h1>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr class="input-form">
				<td><label>Nama Bidang* :</label></td>
				<td>
					<input type="text" name="name" value="<?php echo $this->form->get_temp_data('name');?>">
					<?php echo form_error('name'); ?>
				</td>
			</tr>
			<!--<tr class="input-form">
				<td><label>SBU</label></td>
				<td>
					<?php echo form_dropdown('id_sbu', $sbu, $this->form->get_temp_data('id_sbu'),'');?>
					<?php echo form_error('id_sbu'); ?>
				</td>
			</tr>-->
			<tr class="input-form">
				<td><label>Kategori Bidang</label></td>
				<td>
					<?php echo form_dropdown('id_dpt_type', $role, $this->form->get_temp_data('id_dpt_type'),'');?>
					<?php echo form_error('id_dpt_type'); ?>
				</td>
			</tr>
			
		</table>
		
		<div class="buttonRegBox clearfix">
			<input type="submit" value="Simpan" class="btnBlue" name="Simpan">
		</div>
	</form>
</div>