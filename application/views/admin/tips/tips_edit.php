<?php
  $id_tips          = $name_tips->id_tips;
if($this->input->post('is_submit')){
   
  $title        = set_value('title');
  $summary         = set_value('summary');
  $tips_desc    = set_value('tips_desc');
  $id_author    = set_value('id_author');
} else {
  $title        = $name_tips->title;
  $summary         = $name_tips->summary;
  $tips_desc    = $name_tips->tips_desc;
  $id_author    = $name_tips->id_author;
}
?>

<div class="mainview view">
<?php echo form_open("admin/tips/edit/".$id_tips);?>
<?php echo validation_errors(); ?>
    <div id="form" style="display; padding-bottom:45px;">
        <input type="hidden" name="id_tips" id="id_tips">
        <div class="innert-list">
            <h1>Title</h1>
            <div class="corner">
            <input type="text" name="title" id="title" value="<?php echo $title ?>">
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Summary</h1>
            <div class="corner">
                <textarea name="summary" id="summary" ><?php echo $summary; ?></textarea>
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Tips Description</h1>
            <div class="corner">
                <textarea name="tips_desc" id="tips_desc" ><?php echo $tips_desc; ?></textarea>
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
              <button type="submit" name="is_submit">Submit</button>
        </div>
    </div>
        <?php echo form_close(); ?>
</div>
