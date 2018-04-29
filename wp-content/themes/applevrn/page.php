<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package applevrn
 */

get_header();
?>
    <div class="b-main-banner">
        <a target="<?= get_field('banner_link')['target'];?>" href="<?= get_field('banner_link')['url'];?>"><img src="<?php the_field('banner_img');?>"></a>
    </div>

    <div class="g-clear-both"></div>

    <div class="b-main-catalog">
        <div class="b-catalog"><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/cb49a378542cc6adaaeb6512eb72d9d7ecda0b21/mbp13touch-silver-select-201610_300_300_jpg.jpg"
                                            width="300" height="279"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">MacBook Pro 13"</div>
                    <div class="price">99 990 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc">MLVP2 Core i5 256 Gb</div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/mac/macbook_pro_13_2016_256_gb3/">Купить</a></div>
                </div>
            </div><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/cdce3dfa9a315eb7907dd914e3cd8ae546f6bf0d/snimok_ekrana_2017-03-02_v_21_40_59_300_300_png.png"
                                            width="180" height="300"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">AirPods EAC</div>
                    <div class="price">11 300 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc"></div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/airpods/">Купить</a></div>
                </div>
            </div><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/cb49a378542cc6adaaeb6512eb72d9d7ecda0b21/mbp15touch-gray-select-201610_300_300_jpg.jpg"
                                            width="300" height="279"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">MacBook Pro 15"</div>
                    <div class="price">119 999 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc">MLH32 Core i7 256 Gb</div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/mac/macbook_pro_15_2016_256gb/">Купить</a></div>
                </div>
            </div><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-red-select-2018_av2_300_300_png.png"
                                            width="149" height="300"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">iPhone 8 Plus</div>
                    <div class="price">56 500 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc">64 Gb Red Edition</div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_red_edition/">Купить</a>
                    </div>
                </div>
            </div><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/6846708bc4c690d028f3d45534d4ef7326b8a164/snimok_ekrana_2018-03-07_v_2_34_52_300_300_png.png"
                                            width="300" height="165"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">HomePod</div>
                    <div class="price">26 500 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc">Space Gray/White</div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/mac/homepod/">Купить</a></div>
                </div>
            </div><!-- next
-->
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="#"><img
                                            src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-red-select-2018_av2_300_300_png.png"
                                            width="147" height="300"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name">iPhone 8</div>
                    <div class="price">49 990 <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc">64 Gb Red Edition</div>
                    <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_64_gb_red/">Купить</a></div>
                </div>
            </div><!-- next


	--></div>
    </div>


    <div class="b-catalog"><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/88f8ea532ff786877bfc206d8d66ba634033bfb4/snimok_ekrana_2017-10-04_v_2_35_37_220_220_png.png"
                                        width="153" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone X</div>
                <div class="price">66 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_x_64gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/88f8ea532ff786877bfc206d8d66ba634033bfb4/snimok_ekrana_2017-10-04_v_2_35_30_220_220_png.png"
                                        width="154" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone X</div>
                <div class="price">66 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_x_64gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/88f8ea532ff786877bfc206d8d66ba634033bfb4/snimok_ekrana_2017-10-04_v_2_35_37_220_220_png.png"
                                        width="153" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone X EAC</div>
                <div class="price">76 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_x_256gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/88f8ea532ff786877bfc206d8d66ba634033bfb4/snimok_ekrana_2017-10-04_v_2_35_30_220_220_png.png"
                                        width="154" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone X</div>
                <div class="price">76 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_x_256gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-spgray-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">46 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_64_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-silver-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">46 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_64_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-gold-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">46 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_64_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-red-select-2018_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">49 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Red Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_64_gb_red/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-spgray-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_256_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-silver-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_256_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-gold-select-2017_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_256_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-red-select-2018_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8</div>
                <div class="price">59 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Red Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_256_gb_red/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-spgray-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-silver-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-gold-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-red-select-2018_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">56 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Red Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_red_edition/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-spgray-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">61 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_256_gb_space_gray/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-silver-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">61 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_256_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-gold-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">61 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_256_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_8_plus_256_gb_red_edition/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-red-select-2018_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus</div>
                <div class="price">66 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Red Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_256_gb_red_edition/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_32_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-black-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">37 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_32_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_32_gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-jetblack-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">37 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_32_gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_32_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-silver-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">37 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_32_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-gold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">37 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_32_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-rosegold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">37 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_32_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_red_edition_128_gb/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/snimok_ekrana_2017-03-25_v_20_11_12_220_220_png.png"
                                        width="160" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">44 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb RED Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_red_edition_128_gb/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_128_gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-jetblack-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">42 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_128_gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_128_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-black-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">43 590 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_128_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_128_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-silver-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">42 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_128_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_128_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-gold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">42 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_128_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_128_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-rosegold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">42 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_128_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_red_edition_128_gb1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/snimok_ekrana_2017-03-25_v_20_11_12_220_220_png.png"
                                        width="160" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">44 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb RED Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_red_edition_128_gb1/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_256_gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-jetblack-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">43 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_256_gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_256_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-black-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 EAC</div>
                <div class="price">43 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_256_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_256_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-silver-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">43 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_256_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_256_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-gold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">43 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_256_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_256_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-rosegold-select-2016_av2_220_220_png.png"
                                        width="108" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7</div>
                <div class="price">43 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_256_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_32gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-jetblack-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">45 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_32gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_32_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-black-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">45 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_32_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_32_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-silver-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">45 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_32_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-gold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">45 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_32_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-rosegold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">45 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"> 32 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_32_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_red_edition_128_gb/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/snimok_ekrana_2017-03-25_v_20_11_27_220_220_png.png"
                                        width="170" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">51 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb RED Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_red_edition_128_gb/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_128_gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-jetblack-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">50 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_128_gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_128_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-black-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">50 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_128_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_128_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-silver-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">50 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_128_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_128_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-gold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">50 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_128_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_128_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-rosegold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">50 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_128_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_red_edition_256_gb/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/snimok_ekrana_2017-03-25_v_20_11_27_220_220_png.png"
                                        width="170" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb RED Edition</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_red_edition_256_gb/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_256_gb_jet_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-jetblack-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Jet Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_256_gb_jet_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_256_gb_black/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-black-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Black</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_256_gb_black/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_256_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-silver-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_256_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_256_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-gold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_256_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_7_plus_256_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/9d4b81b0bfa5d40a99837980aeda891e4cf63c69/iphone7-plus-rosegold-select-2016_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 7 Plus</div>
                <div class="price">53 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">256 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_7_plus_256_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_16_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gray-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s EAC</div>
                <div class="price">22 600 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">16 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_16_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_16_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-silver-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">22 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">16 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_16_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_16_gb_rose_gold1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-rosegold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">22 600 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">16 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_16_gb_rose_gold1/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_16_gb_space_gray11/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gray-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">26 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_16_gb_space_gray11/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_32_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-silver-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">30 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_32_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">30 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_32_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-rosegold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">30 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_32_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_64_gb_space_gray1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gray-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">29 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_64_gb_space_gray1/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_64_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-silver-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">31 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_64_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_64_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">30 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_64_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_64_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-rosegold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">31 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_64_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_32_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-gray-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">29 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_32_gb_space_gray/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_32_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-silver-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">29 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_32_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-gold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">29 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_32_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-rosegold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">29 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_32_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_128_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-gray-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">32 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_128_gb_space_gray/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_128_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-silver-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">32 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_128_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_128_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-gold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">32 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_128_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_plus_128_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-plus-rosegold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s Plus</div>
                <div class="price">32 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_plus_128_gb_rose_gold/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_32_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-gray-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">18 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_32_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_32_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-silver-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">18 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_32_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-gold-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">18 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_32_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-rosegold-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">18 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_32_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_128_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-gray-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">25 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_128_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_128_gb_silver/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-silver-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">25 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_128_gb_silver/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_128_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-gold-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">25 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_128_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_se_128_gb_rose_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/c45f34b5ddf7f45ddf68732c5abc2fb1e4b2f820/iphonese-rosegold-select-2016_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone SE</div>
                <div class="price">25 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">128 Gb Rose Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_se_128_gb_rose_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/airpods/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/cdce3dfa9a315eb7907dd914e3cd8ae546f6bf0d/snimok_ekrana_2017-03-02_v_21_40_59_220_220_png.png"
                                        width="132" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">AirPods EAC</div>
                <div class="price">11 300 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc"></div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/airpods/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6_32_gb_space_gray/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/6607081828701f2370b112affff684285dff997c/iphone6-gray-select-2014_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6</div>
                <div class="price">21 500 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6_32_gb_space_gray/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6_32_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/6607081828701f2370b112affff684285dff997c/iphone6-gold-select-2014_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6</div>
                <div class="price">22 990 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">32 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6_32_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_8_plus_64_gb_space_gray1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-spgray-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus EAC</div>
                <div class="price">55 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Space Gray</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_space_gray1/">Купить</a>
                </div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_8_plus_64_gb_silver1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-silver-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus EAC</div>
                <div class="price">55 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Silver</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_silver1/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_8_plus_64_gb_gold1/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/56b6b08fe4b808489da45cde7bc4e95ae0b5e589/iphone8-plus-gold-select-2017_av2_220_220_png.png"
                                        width="109" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 8 Plus EAC</div>
                <div class="price">55 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">64 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_8_plus_64_gb_gold1/">Купить</a></div>
            </div>
        </div><!-- next
-->
        <div class="item">
            <div class="image">
                <table class="itable">
                    <tr>
                        <td class="itd"><a href="#/katalog/iphone/iphone_6s_16_gb_gold/"><img
                                        src="<?=get_template_directory_uri(); ?>/images/cms/thumbs/3113960720e1961e1c61071e38fac2ac728c6f6e/iphone6s-gold-select-2015_220_220_png.png"
                                        width="186" height="220"></a></td>
                    </tr>
                </table>
            </div>
            <div class="info">
                <div class="name">iPhone 6s</div>
                <div class="price">22 490 <span class="rur">р<span>уб.</span></span></div>
                <div class="desc">16 Gb Gold</div>
                <div class="buy"><a class="b-buybtn" href="#/katalog/iphone/iphone_6s_16_gb_gold/">Купить</a></div>
            </div>
        </div><!-- next
--></div>


    <div class="b-main">
        <div class="col">
            <h2 class="likeh1" umi:element-id="1" umi:field-name="h1"><?php the_field('bottom_left_title');?></h2>
            <div class="b-content" umi:element-id="1" umi:field-name="content">
                <p><strong><br/></strong></p>
                <?php the_field('bottom_left_desc');?>
                <p><strong><br/></strong></p>
            </div>
        </div>
        <div class="col">
            <h2 class="likeh1" umi:element-id="12" umi:field-name="h1"><?php the_field('bottom_right_title');?></h2>
            <dl class="b-reviews">
                <?php the_field('bottom_right_desc');?>
            </dl>
        </div>
    </div>
    </div>
    </div>
<?php
get_footer();
