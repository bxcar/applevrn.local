<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applevrn
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <title><?php the_title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
<!--    <script type="text/javascript" src="/js/cross-domain.php"></script>-->

    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="/css/main.css?v=6">-->

<!--    <script type="text/javascript" src="/js/jquery/jquery.js?19660" charset="utf-8"></script>-->
<!--    <script type="text/javascript" src="/js/guest.js?19660" charset="utf-8"></script>-->

<!--    <script src="/js/functions.js?v=2"></script>-->
    <?php wp_head(); ?>
    <style>
        .b-logo {
            background: url(<?php the_field('header_logo', 'option')?>);
        }
    </style>
</head>
<body>
<div class="b-head">
    <div class="b-head-outer">
        <div class="b-head-inner">
            <div class="b-head-inner-wrap">
                <a href="<?= home_url(); ?>"><h1 class="b-logo"></h1></a>
                <div class="b-head-phone"><?php the_field('header_phone', 'option'); ?></div>
                <?php
                echo str_replace(array('menu-item '), array('item '), wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-1',
                        'items_wrap' => '<ul class="b-advmenu">%3$s</ul>',
                        'container' => 'false'
                    ))
                );
                ?>
                <ul class="b-head-catalog">
                    <li class="item <?php if(is_product_category( 'iphone' )) { echo 'active'; } ?>">
                        <a href="/product-category/catalog/iphone/" class="link">
                            <div class="outer">
                                <div class="inner">
                                    <table>
                                        <tr>
                                            <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-iphone<?php if(is_product_category( 'iphone' )) { echo '-active'; } ?>.png"> <span class="tlink"><span>iPhone</span></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item <?php if(is_product_category( 'ipad' )) { echo 'active'; } ?>">
                        <a href="/product-category/catalog/ipad/" class="link">
                            <div class="outer">
                                <div class="inner">
                                    <table>
                                        <tr>
                                            <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-ipad<?php if(is_product_category( 'ipad' )) { echo '-active'; } ?>.png"> <span
                                                        class="tlink"><span>iPad</span></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item <?php if(is_product_category( 'mac' )) { echo 'active'; } ?>">
                        <a href="/product-category/catalog/mac/" class="link">
                            <div class="outer">
                                <div class="inner">
                                    <table>
                                        <tr>
                                            <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-mac<?php if(is_product_category( 'mac' )) { echo '-active'; } ?>.png"> <span
                                                        class="tlink"><span>Mac</span></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item <?php if(is_product_category( 'ipod' )) { echo 'active'; } ?>">
                        <a href="/product-category/catalog/ipod/" class="link">
                            <div class="outer">
                                <div class="inner">
                                    <table>
                                        <tr>
                                            <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-ipod<?php if(is_product_category( 'ipod' )) { echo '-active'; } ?>.png"> <span
                                                        class="tlink"><span>iPod/Watch</span></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="l-container-wrap l-base">
    <div class="l-container g-line">
