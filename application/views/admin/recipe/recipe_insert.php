<div class="mainview view">

<?php echo $error;?>
<?php echo form_open_multipart("admin/recipe/insert");?>
<?php echo validation_errors(); ?>
    <div id="form" style="display; padding-bottom:45px;">
        <input type="hidden" name="id_recipe" id="id_recipe">
        <input type="hidden" name="date_created" id="date_created">
        <div class="innert-list">
            <h1>Recipe Name</h1>
            <div class="corner">
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div class="innert-list">
         <h1>Category</h1>
          <div class="corner">
                    <select id="id_category" name="id_category">
                    <?php 

                    foreach($category as $row)
                    { 
                      echo '<option value="'.$row->id_category.'">'.$row->category.'</option>';
                    }
                    ?>
                    </select>
            </div>
            </div>
        <div class="innert-list">
            <h1>Cook Time</h1>
            <div class="corner">
                <input type="text" name="cook_time" id="cook_time">
            </div>
        </div>
        <div class="innert-list">
            <h1>Image</h1>
            <div class="corner">
               <input type="file" class="form-control" name="userfile" >
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Summary</h1>
            <div class="corner">
                <textarea name="summary" id="summary"></textarea>
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Ingredients</h1>
            <div class="corner">
                <textarea name="ingredients" id="ingredients"></textarea>
            </div>
        </div>
         <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Instruction</h1>
            <div class="corner">
                <textarea name="instruction" id="instruction"></textarea>
            </div>
        </div>
        <div class="innert-list" style="height: 70px;">
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

        <div class="innert-list" style="height:10px;">
        <div class="corner">
              <button type="reset">Reset</button>
              <button type="submit">Submit</button>
        </div>
    </div>
        <?php echo form_close(); ?>
</div>
