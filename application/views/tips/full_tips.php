<script>
function goBack() {
    window.history.back();
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
                                                <?php foreach ($tips_list as $row){ ?>
                                                <div>
                                                     <h3 style="font-size: 20px"><?php echo $row->title; ?> </h3><br />
                                                </div>
                                                    
                                                <div>
                                                     <table cellpadding="2" cellspacing="1">
                                                  <tr>
                                                  <h5> Summary : </h5>
                                                  <br />
                                                    <td></td>
                                                    <td></td>
                                                    <td><?php echo $row->summary; ?></td>
                                                  </tr>
                                                  </table>
                                                </div>
                                                <br />
                                                <table cellpadding="2" cellspacing="1">
                                                <h5> Tips Description : </h5>
                                                <br />
                                                  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><?php echo $row->tips_desc; ?></td>
                                                  </tr>
                                                </table>
                                                <?php }?>

                                                <button onclick="goBack()">Go Back</button>
<!-- End -->
                                    </div>
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