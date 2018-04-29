<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applevrn
 */

?>
<div class="l-footer l-base">
    <div class="b-foot-cont">
        <div class="b-foot">
            <div class="b-foot-outer">
                <div class="b-foot-inner">
                    <table>
                        <tr>
                            <td class="copy"><?php the_field('footer_copyright', 'option'); ?></td>
                            <td class="menu">
                                <?php
                                echo str_replace(array('menu-item '), array('item '), wp_nav_menu(array(
                                        'echo' => false,
                                        'theme_location' => 'menu-1',
                                        'items_wrap' => '<ul class="b-advmenu">%3$s</ul>',
                                        'container' => 'false'
                                    ))
                                );
                                ?>
                            </td>
                            <td class="phone"><?php the_field('footer_phone', 'option'); ?></td>

                        </tr><!--  <td class="devs"><span class="devc"><span class="devd">Сайт сделан в </span><a
                                            title="Digital-агентство Red Collar" href="http://redcollar.ru/"><img
                                                class="devi" src="<?php/*=get_template_directory_uri(); */?>/images/redcollar.png"></a></span></td>-->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html><!-- This page generated in 1.882999 secs by TPL, SITE MODE -->