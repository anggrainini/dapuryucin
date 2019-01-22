<script type="text/javascript">
        function show_confirm(act,gotoid)
        {
        if(act=="view")
            var r=true;
        if (r==true)
            {
                window.location="<?php echo base_url();?>recipes/"+act+"/"+gotoid;
            }
        }

</script>

<?php if($recipe_list==NULL){
	$result='Sorry, no recipes matched your search, Please try different keywords :)';
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
                                        <h3 class="p2">Search Results</h3>
                                        <h5><?php echo $result;?></h5>
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
                                  
                               
                            </article>
                            <article class="col-2">
                                <h3 class="border-bot p2">Our Suggestions</h3>
                                   <?php foreach ($random as $row){ ?>
								<ul class="list-1 img-indent-bot">
                                	<li><a href="#" onClick="show_confirm('view',<?php echo $row->id_recipe;?>)"><?php echo $row->name; ?></a></li>
                                	<?php }?>
                                </ul>	
                            </article>
                        </div>
                    </div>

                </section>

                <div class="block"></div>
                   
        </div>
    </div>