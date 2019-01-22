<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="Description" content="Dapur Yucin | Simple and Healthy Cuisine | dapur_yucin menyediakan kumpulan resep simple, homemade dan tentunya sehat!">
    <meta name="Keywords" content="dapur yucin, resep, masakan, homemade, cooking">
    <meta name="google-site-verification" content="_9QccNyXpIWER3vEu9yfzEql5KwDldbR6Bt-xsIf7eE" />
    <link rel="alternate" hreflang="x" href="alternateURL">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssmenu.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pagination-styles.css" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/kepala.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'> 
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">  
    <link href="<?php echo base_url(); ?>assets/css/thumbnail-gallery.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/cufon-yui.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/Lobster_13_400.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/FF-cash.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/easyTooltip.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bgSlider.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/tms-0.3.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/tms_presets.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/js/cssmenu.js"></script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body>
        <!--==============================header=================================-->
        <header>
            <div class="top-row">
                <div class="main">
                    <div class="wrapper">
                        <h1><?php echo anchor('home','Home', 'class="active"');?></a>
                        </h1>
                        <ul class="pagination">
                            <li class="current"><a href="<?php echo base_url(); ?>assets/images/bg-img1.jpg">1</a></li>
                            <li><a href="<?php echo base_url(); ?>assets/images/bg-img2.jpg">2</a></li>
                            <li><a href="<?php echo base_url(); ?>assets/images/bg-img3.jpg">3</a></li>
                        </ul>

                        <div class="header">
                        <strong class="bg-text">Choose Background:</strong>
                        <?php echo form_open("home/search");?>
                        <form action="index.html">
                            <input type="text" placeholder="Search more than 100+ recipes here" name="search" id="search">
                            <input type="submit" value="" id="searchbtn">
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="menu-row">
                <div class="menu-border">
                    <div class="main">
                        <nav>
                            <ul class="menu">
                            <?php $this->load->view('menu'); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ic">More Website Templates @ TemplateMonster.com - September 26, 2011!</div>
        </header>
        <!--==============================content=================================-->

        <?php echo $content; ?>
    <!--==============================footer=================================-->
    <footer>
        <div class="padding">
            <div class="main">
                <div class="wrapper">
                    <div class="fleft footer-text">
                    <p>&copy; Copyright 2015. dapur_yucin All rights reserved</p>
                    </div>
                    <ul class="list-services">
                        <li>Link to Us:</li>
                        <li><a class="tooltips" title="facebook" href="https://www.facebook.com/nur.yusrin.husnati/"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.slider')._TMS({
                duration:1000,
                easing:'easeOutQuart',
                preset:'simpleFade',
                slideshow:10000,
                banners:'fade',
                pauseOnHover:true,
                waitBannerAnimation:false,
                pagination:'.pags'
            });
        });
    </script>
</body>
</html>
