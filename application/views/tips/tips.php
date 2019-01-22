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
                                        <h4 class="p2">Tips</h4>
                                         <?php foreach ($tips_list as $row){ ?>
                                        <div class="wrapper p3">
                                            <div class="extra-wrap">
                                             <?php $limit=word_limiter($row->summary,20);?>
                                                <h3><?php echo $row->title; ?></h3>
                                                <p class="p1"><?php echo $limit; ?></p>
                                                <a class="button-2" href="#" onClick="show_confirm('view',<?php echo $row->id_tips;?>)">Read More</a>
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
                                <h3 class="border-bot p2">Share your tips ? :)</h3>
                                <h6 class="color-3">Punya tips yang ingin kamu bagikan? </h6>
                                <p>Kamu punya tips seputar masak memasak? sayang kan kalau cuma di simpen sendiri, bagikan disini dengan mengirim tips mu ke <a href="mailto:dapur_yucin@gmail.com?Subject=Tips%20dapuryucin" target="_top">dapuryucin@gmail.com</a></p>
                                <figure class="p2"><img src="<?php echo base_url(); ?>assets/images/kepala.png" alt="" /></figure>
                                <h4 class="color-3">dapur_yucin</h4>
                            </article>
                        </div>
                    </div>
                </section>

                <div class="block"></div>
            </div>
        </div>
    </div>