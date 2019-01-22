<div class="mainview view">
<?php echo form_open("admin/author/insert");?>
	<div id="form" style="display; padding-bottom:45px;">
		<input type="hidden" name="id_author" id="id_author">
		<div class="innert-list">
    		<h1>Author :</h1>
    		<div class="corner">
    			<input type="text" name="name_author" id="author">
    			<?php echo validation_errors(); ?>
    		</div>
    	</div>
    	<br />
    	<div class="inner-list"></div>
    	<div class="corner">
    		  <button type="reset">Reset</button>
              <button type="submit">Submit</button>
    	</div>
    </div>
	<?php echo form_close(); ?>
</div>