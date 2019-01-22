<div class="mainview view">

<?php echo form_open("admin/tips/insert");?>
<?php echo validation_errors(); ?>
    <div id="form" style="display; padding-bottom:45px;">
        <input type="hidden" name="id_tips" id="id_tips">
        <div class="innert-list">
            <h1>Title</h1>
            <div class="corner">
                <input type="text" name="title" id="title">
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1>Summary</h1>
            <div class="corner">
                <textarea name="summary" id="summary"></textarea>
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Tips Description</h1>
            <div class="corner">
                <textarea name="tips_desc" id="tips_desc"></textarea>
            </div>
        </div>
        <div class="innert-list">
         <h1>Author</h1>
          <div class="corner">
                    <select id="id_author" name="id_author">
                    <?php 

                    foreach($author as $row)
                    { 
                      echo '<option value="'.$row->id_author.'">'.$row->name_author.'</option>';
                    }
                    ?>
                    </select>
            </div>
            </div>
        <div class="innert-list">
        <div class="corner">
              <button type="reset">Reset</button>
              <button type="submit">Submit</button>
        </div>
    </div>
        <?php echo form_close(); ?>
</div>
