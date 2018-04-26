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
    <meta name="description"
          content="Applevrn.ru - купить в Воронеже iPhone 7,iPhone 7 Plus,iPhone 6S,iPhone 6s Plus,iPhone SE,iPhone 6,iPhone 5S,iPad Air 2,ipad 2017,iPad mini 4,iPad Pro 9.7,iPad Pro 10.5,iPad Pro 12.9,MacBook 12,MacBook Pro,MacBook Air,Apple iMac,iPad,gray,gold,silver,rose">
    <meta name="keywords"
          content="Applevrn.ru - купить в Воронеже iPhone 8,iPhone 8 plus, iPhone X,10,ten, iPhone 7,iPhone 7 Plus,iPhone 6S,iPhone 6s Plus,iPhone SE,iPhone 6,iPhone 5S,iPad Air 2,ipad 2017,iPad mini 4,iPad Pro 9.7,iPad Pro 10.5,iPad Pro 12.9,MacBook 12,MacBook Pro,MacBook ">
    <title>Applevrn.ru - купить в Воронеже iPhone 8,iPhone 8 plus, iPhone X,10,ten, iPhone 7,iPhone 7 Plus,iPhone
        6S,iPhone 6s Plus,iPhone SE,iPhone 6,iPhone 5S,iPad Air 2,ipad 2017,iPad mini 4,iPad Pro 9.7,iPad Pro 10.5,iPad
        Pro 12.9,MacBook 12,MacBook Pro,MacBook </title>
    <link rel="shortcut icon" href="/favicon.ico">
<!--    <script type="text/javascript" src="/js/cross-domain.php"></script>-->

    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="/css/main.css?v=6">-->

<!--    <script type="text/javascript" src="/js/jquery/jquery.js?19660" charset="utf-8"></script>-->
<!--    <script type="text/javascript" src="/js/guest.js?19660" charset="utf-8"></script>-->

<!--    <script src="/js/functions.js?v=2"></script>-->
    <?php wp_head(); ?>
</head>
<body>
<div class="b-head">
    <div class="b-head-outer">
        <div class="b-head-inner">
            <div class="b-head-inner-wrap">
                <a href="<?= home_url(); ?>"><h1 class="b-logo">Applevrn.ru</h1></a>
                <div class="b-head-phone">+7 (473) 238-08-70</div>
                <ul class="b-advmenu">
                    <li class="item"><a href="/shipping-and-payment/">Доставка и оплата</a></li>
                    <li class="item"><a href="/service/">Сервис</a></li>
                    <li class="item"><a href="/trade-in/">Trade-in</a></li>

                </ul>

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
