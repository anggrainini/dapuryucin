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



<body id="page7">       
<div id="bgSlider"></div>
    <div class="bg_spinner"></div>
    <div class="extra">
        <div class="inner">
            <div class="main">
                <section id="content">
                    <div class="bg">
                        <div class="padding">
                         <h4 class="p2">Gallery</h4>
                         
                            <div class="wrapper">
                             <?php foreach ($gallery_list as $row){ ?>
                                <article class="col-1">
                                <p></p>
                                    <figure class="img-indent img-gallery" onClick="show_confirm('view',<?php echo $row->id_recipe;?>)"><?php $recipe_image = ['src'   => 'uploads/' . $row->image,
                                                  'width' => '200', 'height' =>'166']; echo img($recipe_image)?></figure>      
                                </article>   
                                  <?php }?>
                                  
                            </div>
                          
                        </div>
                     
                        
                    </div>
                   
                    <div class="styles">
						        <ul class="pagination3">
						            <li><?php echo $halaman;?></li>
						        </ul>
						        <div class="clear"></div>        
						    </div>
                 <div class="block"></div>

            </div>
        </div>
    </div>