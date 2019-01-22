<!-- Content -->
<script type="text/javascript">
		function show_confirm(act,gotoid)
		{
		if(act=="edit")
			var r=confirm("Do you really want to edit?");
		else
			var r=confirm("Do you really want to delete?");

		if (r==true)
			{
				window.location="<?php echo base_url();?>admin/category/"+act+"/"+gotoid;
			}
		}
	</script>
<div style="font-size:15px; color: #999999; padding-bottom: 15px; float:left;">CATEGORY</div>
<div style="float:right;">
	<div class="menu">
		<a href="<?php echo base_url();?>admin/category/insert"><button id="btn-insert">Insert New Category</button></a> 
	</div>
</div>

<div id="view" style="padding-bottom:45px;">
<!-- Datatables -->
	<table class="table" id="tabels">
		<thead>
			<tr>
				<th>Category</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($category_list as $row){ ?></td>
			<tr>
				<td><?php echo $row->category; ?></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $row->id_category;?>)">Edit</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $row->id_category;?>)">Delete </a></td>
			</tr>
		</tbody>
			<?php }?>
	</table>
	
	<br />
	 <div style="font-size:15px; color: black; padding-bottom: 15px; float:right;">Page : <?php echo $halaman;?></div>

<!-- End -->
		