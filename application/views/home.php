<script type="text/javascript">
        function show_confirm(act,gotoid)
        {
        if(act=="view")
            var r=true;
        if (r==true)
            {
                window.location="<?php echo base_url();?>tips/"+act+"/"+gotoid;
            }
        }

</script>
<body id="page1">       
<div id="bgSlider"></div>
    <div class="bg_spinner"></div>
    <div class="extra">
        <div class="inner">
            <div class="main">
                <section id="content">
                    <div class="slider">
                        <ul class="items">
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/slider1.png" alt="" />
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipes</em>
                                    </strong>
                                    <p class="p3">Lihat - lihat kumpulan resep masakan yang telah di buat di dapur yucin</p>
                                    <a class="button-1" href=<?php echo base_url("recipes");?>>Read More</a>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/slider2.png" alt="" />
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Gallery</strong>
                                    </strong>
                                    <p>Lihat - lihat foto gallery masakan yang ada.. Yummy.. yummy looo.....</p>
                                    <a class="button-1" href=<?php echo base_url("gallery");?>>Read More</a>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url(); ?>assets/images/slider3.png" alt="" />
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Tips</em>
                                    </strong>
                                    <p>Tips tips pilihan dapur yucin seputar masak - memasak dan alat masak.</p>
                                    <a class="button-1" href=<?php echo base_url("tips");?>>Read More</a>
                                </div>
                            </li>
                        </ul>
                        <a class="banner-2" href="#"></a>
                    </div>
                    <ul class="pags">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                    <div class="bg">
                        <div class="padding">
                            <div class="wrapper">
                             <?php foreach ($tips_list as $row){ ?>
                                <article class="col-1">
                                <?php $title=word_limiter($row->title,3);?>
                                     <h3><?php echo $row->title; ?></h3>
                                    <?php $limit=word_limiter($row->summary,15);?>
                                    <p class="p1"><?php echo $limit;?></p>
                                    <div class="relative">
                                        <a class="button-2" href="#" onClick="show_confirm('view',<?php echo $row->id_tips;?>)">Read More</a>
                                    </div>
                                </article>
                                 <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="padding-2">
                        <div class="indent-top">
                            <div class="wrapper">
                                <article class="col-3">
                                    <h4><strong>Welcome</strong> <em>to dapur yucin</em></h4>
                                    <p class="color-2 p1">dapur yucin menyajikan resep - resep homemade, simple, yang pastinya sehat! Selain resep masakan disini juga terseda tips mulai dari alat masak dan aneka teknik memasak. Kalian bisa juga lo share tips dan resep masakan hasil kreasi kalian. Resep yang terpilih, akan di masak di <strong>dapur_yucin</strong> hihihi.. asyik kan? kirim ke : <a href="mailto:dapur_yucin@gmail.com?Subject=Resep%20DapurYucin" target="_top">dapuryucin@gmail.com</a></p> 
                                    <p class="color-2 p1">Jangan lupa tinggalkan pesan dan kesan kalian di Guestbook !!</p>
                                </article>
                                <div class="extra-wrap">
                                    <img src="<?php echo base_url(); ?>assets/images/kepala.png" alt="" /></a>
                                    <h4 class="color-3">dapur_yucin</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="block"></div>
            </div>
        </div>
    </div>