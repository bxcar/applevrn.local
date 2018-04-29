<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package applevrn
 */

get_header();
while ( have_posts() ) : the_post();
global $product; ?>
    <div class="b-item-cont">
        <div class="b-item-info">
            <h1 class="title" umi:element-id="<?= get_the_ID(); ?>" umi:field-name="nazvanie"><?php the_title(); ?></h1>
            <div class="subtitle" umi:element-id="<?= get_the_ID(); ?>" umi:field-name="korotkoe_opisanie"><?php echo $product->short_description; ?></div>
            <div class="desc" umi:element-id="<?= get_the_ID(); ?>" umi:field-name="polnoe_opisanie">
                <?php echo $product->description; ?>
            </div>
            <div class="delivery"><a href="/shipping-and-payment/"><?php the_field('shipping_title'); ?></a> &mdash; <?php the_field('shipping_price'); ?> <span class="rur">р<span>уб.</span>
            </div>
            <div class="buy">
                <div class="price"><?php echo $product->price; ?> <span class="rur">р<span>уб.</span></span></div>
                <a class="b-bigbtn" href="#order">Купить</a>
            </div>
            <div class="order">
                <form action="/order/" method="post">
                    <input type="hidden" name="act" value="send">
                    <input type="hidden" name="page" value="<?php the_permalink(); ?>">
                    <table class="order-form">
                        <tr>
                            <td>Ваше имя</td>
                            <td class="inp">
                                <div class="b-input"><input type="text" name="data_name"></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Номер телефона</td>
                            <td class="inp">
                                <div class="b-input"><input required type="text" name="data_phone"></div>
                            </td>
                        </tr>
                    </table>
                    <p class="order-desc">Мы с вами свяжемся и уточним детали заказа</p>
                    <button class="b-bigbtn">Подтвердить</button>
                </form>
            </div>
        </div>

        <div class="b-item-view">
            <div class="view-wrap">
                <?php
                $images_ids = $product->gallery_image_ids;

                foreach( $images_ids as $image_ids ) { ?>
                    <div class="item"><img
                                src="<?= wp_get_attachment_url( $image_ids ); ?>"></div>
                <?php } ?>
            </div>
            <div class="view-list-block">
                <div class="view-list-rel">
                    <ul class="view-list">
                        <?php
                        $images_ids = $product->gallery_image_ids;

                        foreach( $images_ids as $image_ids ) { ?>
                            <li class="item">
                                <a class="imglink"
                                   href="<?= wp_get_attachment_url( $image_ids ); ?>"></a>
                                <div class="image">
                                    <table>
                                        <tr>
                                            <td>
                                                <img style="max-width: 80%; max-height: 75%;" src="<?= wp_get_attachment_url( $image_ids ); ?>"></td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="view-list-pointer"></div>
                </div>
            </div>
        </div>

        <div class="g-clear-both"></div>
        <br><br>
    </div>
    </div>
    </div>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();
