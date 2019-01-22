<?php
  $id_author          = $name_author->id_author;
if($this->input->post('is_submited')){
   
  $name_author         = set_value('name_author');
} else {
  $name_author         = $name_author->name_author;
}
?>


<div class="mainview view">
<?php echo form_open("admin/author/edit/".$id_author);?>
	<div id="form" style="display; padding-bottom:45px;">
		<div class="innert-list">
    		<h1>Author :</h1>
    		<div class="corner">
    			<input type="text" name="name_author" id="name_author" value="<?php echo $name_author ?>">
    			<?php echo validation_errors(); ?>
    		</div>
    	</div>
    	<br />
    	<div class="inner-list"></div>
    	<div class="corner">
    		  <button type="reset">Reset</button>
              <button type="submit" name="is_submit">Submit</button>
    	</div>
    </div>
	<?php echo form_close(); ?>
</div>