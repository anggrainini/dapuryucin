<script>
function goBack() {
    window.history.back();
}
</script>

<style>

  .block-container{
    width: 100%;
    height: auto;
    float : left;
    background-color: white;
  }

  .container{
    height: auto;
    float : left;
    background-color: white;
  }

  .wadah1{
    width: 100%;
    height : 250px;
    background-color: white;
    float: left;
  }

    .wadah2{
    width: 100%;
    height : 550px;
    background-color: white;
    float: left;
  }

  .bagiimg{
    width: 350px;
    height: 350px;
    float: left;

  }

  .img{
    width: 350px;
    height :350px;
    float: left;
    margin: 5, 5, 5, 5px;
    background-color: white;
  }

  .deskripsi{
    width: 565px;
    height: 350px;
    float: left;
    background-color: white;
  }
  
  .tittle{
    height: 50px;
    width: 565px;
    background-color: white;
   float: left;
  }

    .summary{
    padding-left: 20px;
    height: 150px;
    width: 565px;
    background-color: white;
    float: left;
    }

     .categori{
    padding-left: 20px;
    height: 65px;
    width: 565px;
    background-color: white;
    float: left;
    }

     .cooktime{
    padding-left: 20px;
    height: 65px;
    width: 565px;
    background-color: white;
    float: left;
    }

     .komposisi{
    padding-top: 10px;
    padding-left: 30px;
    height: 450px;
    width: 40%;
    background-color: white;
    float: left;
    }

     .cara{
    padding-top: 10px;
     padding-left: 30px;
    height: 500px;
    width: 50%;
    background-color: white;
    float: left;
    }

    .autor{
    height: 50px;
    width: 50%;
    background-color: white;
    float: left;
    }

     .datetime{
    height: 50px;
    width: 50%;
    background-color: white;
    float: left;
    }
</style>

<?php foreach ($recipe_list as $row){ ?>
<div id="view" style="padding-bottom:910px;">
<div class="block-container">
<div class="container">
  <div class="wadah1">
     <div class="bagiimg"> 
      <div class="img">
       <?php
        $recipe_image = ['src'   => 'uploads/' . $row->image,
                   'width' => '350', 'height'=>'350'];echo img($recipe_image)?>
      </div>
    </div>
    <div class="deskripsi">
      <div class="tittle">
       <p style="text-align:center; font-size:20px"><strong><?php echo $row->name; ?></strong>
      </div>
      <div class="summary">
      <p> Summary  :  <?php echo $row->summary; ?></p>
      </div>
      <div class="categori">
      <p> Category  : <?php echo $row->category; ?></p>
      </div>
      <div class="cooktime">
         <p> Cook Time : <?php echo $row->cook_time; ?></p>
      </div>
    </div>
  <div class="wadah2">
    <div class="komposisi">
    <p> Ingredients : </p>
    <br />
      <?php echo $row->ingredients; ?>
    </div>
    <div class="cara">
     <p> Instruction : </p>
    <br />
      <?php echo $row->instruction; ?>
    </div>
    <div class="autor">
    <p> Author :
      <?php echo $row->name_author; ?> </p>
    </div>
    <div class="datetime">
      <p> Date Created : <?php echo $row->date_created; ?> </p>
    </div>
    <div>
      <button onclick="goBack()">Go Back</button>
    </div>
  </div>
 

<?php }?>
</div>
<!-- End -->
    