<?php
  $id_category          = $category->id_category;
if($this->input->post('is_submited')){
   
  $category         = set_value('category');
} else {
  $category         = $category->category;
}
?>


<div class="mainview view">
<?php echo form_open("admin/category/edit/".$id_category);?>
	<div id="form" style="display; padding-bottom:45px;">
		<div class="innert-list">
    		<h1>Category :</h1>
    		<div class="corner">
    			<input type="text" name="category" id="category" value="<?php echo $category ?>">
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