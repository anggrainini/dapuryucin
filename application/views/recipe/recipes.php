<script type="text/javascript">
        function show_confirm(act,gotoid)
        {
        if(act=="view")
            var r=true;
        else 
        	if(act=="author")
        	var r=true;
        else if(act=="category")
        	var r=true;
        if (r==true)
            {
                window.location="<?php echo base_url();?>recipes/"+act+"/"+gotoid;
            }
        }

</script>

<?php if($pagination=='1'){
    $halaman=$this->pagination->create_links();
    }
    else{
    $halaman='';
      }  ?>

<?php if($recipe_list==NULL){
	$result='Oh Noo.. There is no recipe :(';
	}
	else{
	$result='';
	  }  ?>

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
                                        <h4 class="p2"><?php echo $title_box;?></h4>
                                        <?php echo $result;?>
                                        <?php foreach ($recipe_list as $row){ ?>
                                        <div class="wrapper p3">
                                            <figure class="img-indent"><?php $recipe_image = ['src'   => 'uploads/' . $row->image,
                                                  'width' => '200', 'height' =>'166']; echo img($recipe_image)?></figure>
                                            <div class="extra-wrap">
                                                <h6><?php echo $row->name; ?></h6>
                                                <?php $limit=word_limiter($row->summary,20);?>
                                                <p class="p1"><?php echo $limit; ?></p>
                                                <a class="button-2" href="#" onClick="show_confirm('view',<?php echo $row->id_recipe;?>)">Read More</a>
                                            </div>
                                        </div>
                                           <?php }?>
                                    </div>
                                </div>
                                <div class="styles">
						        <ul class="pagination3">
						            <li><?php echo $halaman;?></li>
						        </ul>
						        <div class="clear"></div>       
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
                                </ul>	
                            </article>
                        </div>
                    </div>

                </section>
                   
        </div>
    </div>


