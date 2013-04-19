<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:        template.php
 * @Package:        GetSimple
 * @Action:        Ma theme for GetSimple CMS
 *
 *****************************************************/
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Site Title -->
    <title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="all"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/idangerous.swiper.css">
    <script defer src="<?php get_theme_url(); ?>/js/idangerous.swiper-1.9.min.js"></script>
</head>
<body id="<?php get_page_slug(); ?>">

<div id="wrapper">

    <header>
        <a class="logo" href="<?php get_site_url(); ?>">
            <!--<img src="<?php get_theme_url(); ?>/img/hb_logo.png" alt="<?php get_site_name(); ?>" />--></a>

        <p class="adress">
            <?php get_component('adress'); ?>
        </p>
        <ul id="banners">
            <li class="banner"><a href="<?php get_site_url(); ?>haare" class="haare">&nbsp;</a></li>
            <li class="banner"><a href="<?php get_site_url(); ?>naegel" class="naegel">&nbsp;</a></li>
            <li class="banner"><a href="<?php get_site_url(); ?>kosmetik" class="kosmetik">&nbsp;</a></li>
        </ul>
        <ul id="nav">
            <?php get_navigation(return_page_slug()); ?>
        </ul>
    </header>
    <!-- end header -->

    <div id="content" role="main">
        <div id="page-content">
            <?php
            if (return_page_slug() == 'index') {
                ?>
                <div class="content-block productsstart">
                    <p class=""><?php get_component('productsstart'); ?></p>
                </div>
                <div class="content-block">
                    <p class="adress"><?php get_component('adress'); ?></p>
                </div>
            <?php
            } else {
                get_page_content();
            }
            ?>
        </div>
    </div>

    <p class="contact">
        <?php get_component('contact'); ?>
    </p>

    <?php get_footer(); ?>

</div>
<!-- end wrapper -->
<script type="text/javascript">
    //    window.mySwipe = Swipe(document.getElementById('slider'), {
    //        startSlide: 2,
    //        auto: 3000,
    //        speed: 500
    //    });
    $(function () {
//        if ($(window).width() <= 960) {
        if ($('#nav').css('display') == 'none') {
            var mySwiper = $('.swiper-container').swiper({
                freeMode: true,
                freeModeFluid: true,
                initialSlide: 1.1,
                slidesPerSlide: 1.8,
                //scrollContainer: true,
                grabCursor: true
            });


        } else {
            $('.products').insertBefore('.swiper-container');
        }

//        $(window).resize(function() {
//            console.log("Slider reinit");
//            mySwiper.reInit();
//        });


    })

</script>
</body>
</html>