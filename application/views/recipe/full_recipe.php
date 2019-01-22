<script>
function goBack() {
    window.history.back();
}
</script>

<script type="text/javascript">
        function show_confirm(act,gotoid)
        {
        if(act=="view")
            var r=true;
        else if(act=="category")
            var r=true;
        else if(act=="author")
            var r=true;
        if (r==true)
            {
                window.location="<?php echo base_url();?>recipes/"+act+"/"+gotoid;
            }
        }
</script>

<body id="page5">
    <div id="bgSlider"></div>
    <div class="bg_spinner"></div>
    <div class="extra">

        <div class="inner">
            <div class="main">
                <section id="content">
                    <div class="indent">
                        <div class="wrapper">
                            <article class="col-1">
                                <div class="bg">
                                    <div class="padding">
                                                <?php foreach ($recipe_list as $row){ ?>
                                                <div class="judul">
                                                     <h4><?php echo $row->name; ?> </h4><br />
                                                </div>

                                                <div class="upper">
                                                    <div class="gambar">
                                                        <?php
                                                                    $recipe_image = ['src'   => 'uploads/' . $row->image,
                                                                   'width' => '450'];echo img($recipe_image)?>

                                                    </div>
                                                    <br>
                                                    <div class="divider">
                                                     <p><strong>Title :</strong> <?php echo $row->name; ?> </p>
                                                        <div class="cooktime">
                                                            <p><strong>Cook Time :</strong> <?php echo $row->cook_time; ?></p>
                                                        </div>
                                                        <div class="category">
                                                            <p><strong> Category :</strong> <?php echo $row->category; ?></p>
                                                        </div>
                                                        <div class="author">
                                                            <p><strong>Author :</strong> <?php echo $row->name_author; ?></p>
                                                        </div>

                                                    </div>
                                                 
                                                </div>

                                                <div class="mainrecipe">
                                                    <div class="summary">
                                                        <p><strong>Summary : </strong></p><p><?php echo $row->summary; ?></p>
                                                    </div>
                                                    <div class="divider">
                                                        <div class="ingredients">
                                                            <p><strong>Ingredients   : </strong><?php echo $row->ingredients; ?></p>
                                                        </div>
                                                        <div class="instructions">
                                                            <p><strong>Instructions : </strong><?php echo $row->instruction; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                            <p> <strong> Date Created : </strong> <?php echo $row->date_created; ?> </p>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <br />

                                                <button class="button-1"  onclick="goBack()">Go Back</button>
<!-- End -->
                                    </div>
                                </div>
                               
                            </article>
                            <article class="col-2">
                                <h3 class="border-bot p2">Browse Recipe</h3>
                                <div id='cssmenu'>
                                       <ul>
                                           <li class='has-sub'><a href='#'><span>BY Category</span></a>
                                              <ul>
                                              <?php foreach ($category as $row){ ?>
                                                 <li><a href='#' onClick="show_confirm('category',<?php echo $row->id_category;?>)"><span><?php echo $row->category; ?></span></a></li>
                                                 <?php }?>
                                              </ul>
                                           </li>
                                           <li class='has-sub'><a href='#'><span>BY Author</span></a>
                                              <ul>
                                               <?php foreach ($author as $row){ ?>
                                                 <li><a href='#' onClick="show_confirm('author',<?php echo $row->id_author;?>)"><span><?php echo $row->name_author; ?></span></a></li>
                                                 <?php }?>
                                              </ul>
                                           </li>
                                        </ul>
                                        </div>
                                <figure><img src="<?php echo base_url(); ?>assets/images/kepala.png" alt="" /></figure>
                                <br />
                                <h4 class="color-3">Random Recipes </h4>
                                <br/>
                                <?php foreach ($random as $row){ ?>
                                <ul class="list-1 img-indent-bot">
                                    <li><a href="#" onClick="show_confirm('view',<?php echo $row->id_recipe;?>)"><?php echo $row->name; ?></a></li>
                                    <?php }?>
                            </article>
                        </div>
                    </div>
                </section>
                <div class="block"></div>
                   
        </div>
    </div>