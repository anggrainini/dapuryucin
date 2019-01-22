<div class="mainview view">
<?php echo form_open("admin/category/insert");?>
	<div id="form" style="display; padding-bottom:45px;">
		<input type="hidden" name="id_category" id="id_category">
		<div class="innert-list">
    		<h1>Category :</h1>
    		<div class="corner">
    			<input type="text" name="category" id="category">
    			<?php echo validation_errors(); ?>
                </div>
    	</div>
        <div class="innert-list">
    	<div class="corner">
              <button type="reset">Reset</button>
              <button type="submit">Submit</button>
        </div>
        </div>
    </div>
	<?php echo form_close(); ?>
</div>