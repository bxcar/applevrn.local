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
<div class="l-container-wrap l-base">
    <div class="l-container g-line">
        <div class="b-head">
            <div class="b-head-outer">
                <div class="b-head-inner">
                    <h1 class="b-logo">Applevrn.ru</h1>
                    <div class="b-head-phone">+7 (473) 238-08-70</div>
                    <ul class="b-advmenu">
                        <li class="item"><a href="/dostavka_i_oplata/">Доставка и оплата</a></li>
                        <li class="item"><a href="/servis/">Сервис</a></li>
                        <li class="item"><a href="/tradein/">Trade-in</a></li>

                    </ul>

                    <ul class="b-head-catalog">
                        <li class="item">
                            <a href="/katalog/iphone/" class="link">
                                <div class="outer">
                                    <div class="inner">
                                        <table>
                                            <tr>
                                                <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-iphone.png"> <span class="tlink"><span>iPhone</span></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item">
                            <a href="/katalog/ipad/" class="link">
                                <div class="outer">
                                    <div class="inner">
                                        <table>
                                            <tr>
                                                <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-ipad.png"> <span
                                                            class="tlink"><span>iPad</span></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item">
                            <a href="/katalog/mac/" class="link">
                                <div class="outer">
                                    <div class="inner">
                                        <table>
                                            <tr>
                                                <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-mac.png"> <span
                                                            class="tlink"><span>Mac</span></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item">
                            <a href="/katalog/ipod/" class="link">
                                <div class="outer">
                                    <div class="inner">
                                        <table>
                                            <tr>
                                                <td class="cont"><img src="<?=get_template_directory_uri(); ?>/images/cat-ipod.png"> <span
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
