<!-- Content -->
<script type="text/javascript">
		function show_confirm(act,gotoid)
		{
		if(act=="edit")
			var r=confirm("Do you really want to edit?");
		else if (act=="delete")
			var r=confirm("Do you really want to delete?");
		else
			var r=confirm("Do you want to view the full recipe?");

		if (r==true)
			{
				window.location="<?php echo base_url();?>admin/recipe/"+act+"/"+gotoid;
			}
		}

</script>
<div style="font-size:15px; color: #999999; padding-bottom: 15px; float:left;">RECIPE</div>
<div style="float:right;">
	<div class="menu">
		<a href="<?php echo base_url();?>admin/recipe/insert"><button id="btn-insert">Insert New Recipe</button></a> 
	</div>
</div>


<div id="view" style="padding-bottom:45px;">
<!-- Datatables -->
	<table class="table" id="tabels">
		<thead>
			<tr>
				<th>Name</th>
				<th>Category</th>
				<th>Author</th>
				<th>Image</th>
				<th>Cook Time</th>
				<th>Date Created</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($recipe_list as $row){ ?></td>
			<tr>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->category; ?></td>
				<td><?php echo $row->name_author; ?></td>
				<td><?php
                $recipe_image = ['src'   => 'uploads/' . $row->image,
                                                  'width' => '150'
                                                 ];
                                echo img($recipe_image)
                                ?></td>
				<td><?php echo $row->cook_time; ?></td>
				<td><?php echo $row->date_created; ?></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('view',<?php echo $row->id_recipe;?>)">View</a></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $row->id_recipe;?>)">Edit</a></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $row->id_recipe;?>)">Delete </a></td>

		</tbody>
		
			<?php }?>
	</table>

	<br />
	 <div style="font-size:15px; color: black; padding-bottom: 15px; float:right;">Page : <?php echo $halaman;?></div>

<!-- End -->
		