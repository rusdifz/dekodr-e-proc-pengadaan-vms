<?php echo $this->session->flashdata('msgSuccesss')?>
<h2 class="formHeader">Kontrak</h2>
<div class="tableWrapper" style="margin-bottom: 20px">
	
	<div class="filterBtnWp">		
		<button class="editBtn lihatData filterBtn">Filter</button>
	</div>
	<table class="tableData">
		<thead>
			<tr>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.name">Nama Pengadaan<i class="fa fa-sort-<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: 120px"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.name">Jenis Pengadaan<i class="fa fa-sort-<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: auto"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.name">NPWP<i class="fa fa-sort-<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: 150px"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['pemenang'] == 'asc') ? 'desc' : 'asc'; ?>&by=pemenang">Nama Pemenang Sesuai Kontrak<i class="fa fa-sort-<?php echo ($sort['pemenang'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: auto"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.name">Nilai<i class="fa fa-sort-<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: 50px"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.name">Status<i class="fa fa-sort-<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td style="width: 50px"><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['ms_procurement.name'] == 'asc') ? 'desc' : 'asc'; ?>&by=ms_procurement.budget_year">Tahun<i class="fa fa-sort-<?php echo ($sort['ms_procurement.budget_year'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<?php if ($admin['id_role'] == 8) { ?>	
				<td>Last Edited</td>
				<?php }?>
				<td class="actionPanel" style="width: 130px">Action</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		if(count($pengadaan_list)){
			foreach($pengadaan_list as $row => $value){
		?>
				<tr>
					<td><?php echo $value['name'];?></td>
					<td><?php echo $value['mekanisme_name'];?></td>
					<td><?php echo $value['npwp_code'];?></td>
					<td><?php echo $value['pemenang'];?></td>
					<?php if ($value['contract_price'] != '') { ?>
					<td><?php echo "Rp. ".number_format($value['contract_price']);?></td>	
					<?php } else {?>
					<td><?php echo "Rp. ".number_format($value['nilai']).' (Nilai HPS)';?></td>
					<?php } ?>
					<td><?php echo $value['status'];?></td>
					<td><?php echo $value['budget_year'];?></td>
					
					<?php if ($admin['id_role'] == 8) { ?>
					<td><?php echo $value['last_edited'];?></td>					
					<?php }?>

					<td class="actionBlock">
						<a href="<?php echo site_url('kontrak/view/'.$value['id'])?>" class="editBtn lihatData"><i class="fa fa-search"></i>&nbsp;Lihat data</a>
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
	<div class="pageNumber">
		<?php echo $pagination ?>
	</div>
	<div class="filterWrapperOverlay"></div>
	<div class="filterWrapper">
		<div class="filterWrapperInner">
			<form method="POST">
				<?php echo $filter_list;?>
			</form>
		</div>
	</div>
</div>