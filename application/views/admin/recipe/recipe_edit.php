<?php
  $id_recipe          = $name_recipe->id_recipe;
if($this->input->post('is_submit')){
   
  $name         = set_value('name');
  $id_category  = set_value('id_category');
  $cook_time    = set_value('cook_time');
  $summary      = set_value('summary');
  $ingredients  = set_value('ingredients');
  $instruction  = set_value('instruction');
  $id_author    = set_value('id_author');
} else {
  $name        = $name_recipe->name;
  $id_category = $name_recipe->id_category;
  $cook_time   = $name_recipe->cook_time;
  $summary     = $name_recipe->summary;
  $ingredients = $name_recipe->ingredients;
  $instruction = $name_recipe->instruction;
  $id_author   = $name_recipe->id_author;
}
?>

<div class="mainview view">
<?php echo $error;?>

<?php echo form_open_multipart("admin/recipe/edit/".$id_recipe);?>
<?php echo validation_errors(); ?>
    <div id="form" style="display; padding-bottom:45px;">
        <input type="hidden" name="id_recipe" id="id_recipe">
        <input type="hidden" name="date_created" id="date_created">
        <div class="innert-list">
            <h1>Recipe Name</h1>
            <div class="corner">
                <input type="text" name="name" id="name" value="<?php echo $name ?>">
            </div>
        </div>
        <div class="innert-list">
         <h1>Category</h1>
          <div class="corner">
                    <select id="id_category" name="id_category">
                    <?php 

                    foreach($category as $row)
                    { 
                      if($row->id_category == $id_category){
                         echo '<option value="'.$row->id_category.'" selected>'.$row->category.'</option>';
                      }
                      else{
                         echo '<option value="'.$row->id_category.'">'.$row->category.'</option>';
                      }
                     
                    }
                    ?>
                    </select>
            </div>
            </div>
        <div class="innert-list">
            <h1>Cook Time</h1>
            <div class="corner">
                <input type="text" name="cook_time" id="cook_time" value="<?php echo $cook_time ?>">
            </div>
        </div>
        <div class="innert-list">
            <h1>Image</h1>
            <div class="corner">
               <input type="file" class="form-control" name="userfile">
            </div>
        </div>
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Summary</h1>
            <div class="corner">
                <textarea name="summary" id="summary"><?php echo $summary ?></textarea>
            </div>
        </div>
        <br />
        <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Ingredients</h1>
            <div class="corner">
                <textarea name="ingredients" id="ingredients"><?php echo $ingredients ?></textarea>
            </div>
        </div>
         <div class="innert-list" style="height: 300px;">
            <h1 style="border-bottom: 0px;">Instruction</h1>
            <div class="corner">
                <textarea name="instruction" id="instruction"><?php echo $instruction ?></textarea>
            </div>
        </div>
        <div class="innert-list" style="height:70px;">
         <h1>Author</h1>
          <div class="corner">
                    <select id="id_author" name="id_author">
                    <?php 
                    foreach($author as $row)
                    { 
                      if($row->id_author == $id_author){
                         echo '<option value="'.$row->id_author.'" selected>'.$row->name_author.'</option>';
                      }
                      else{
                         echo '<option value="'.$row->id_author.'">'.$row->name_author.'</option>';
                      }
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
