<!-- Content -->
<script type="text/javascript">
		function show_confirm(act,gotoid)
		{
		if(act=="edit")
			var r=confirm("Do you really want to edit?");
		else if (act=="delete")
			var r=confirm("Do you really want to delete?");
		else
			var r=confirm("Do you want to view full tips?");

		if (r==true)
			{
				window.location="<?php echo base_url();?>admin/tips/"+act+"/"+gotoid;
			}
		}
	</script>
<div style="font-size:15px; color: #999999; padding-bottom: 15px; float:left;">TIPS</div>
<div style="float:right;">
	<div class="menu">
		<a href="<?php echo base_url();?>admin/tips/insert"><button id="btn-insert">Insert New Tips</button></a> 
	</div>
</div>


<div id="view" style="padding-bottom:45px;">
<!-- Datatables -->
	<table class="table" id="tabels">
		<thead>
			<tr>
				<th>Title</th>
				<th>Summary</th>
				<th>Author</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($tips_list as $row){ ?></td>
			<tr>
				<td><?php echo $row->title; ?></td>
				<?php $limit=word_limiter($row->summary,9);?>
				<td><?php echo $limit; ?></td>
				<td><?php echo $row->name_author; ?></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('view',<?php echo $row->id_tips;?>)">View</a></td>
				<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $row->id_tips;?>)">Edit</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $row->id_tips;?>)">Delete </a></td>
			</tr>
		</tbody>
		
			<?php }?>
	</table>
	<br />
	 <div style="font-size:15px; color: black; padding-bottom: 15px; float:right;">Page : <?php echo $halaman;?></div>

<!-- End -->
		