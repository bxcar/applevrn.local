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
        <a target="<?= get_field('banner_link')['target']; ?>" href="<?= get_field('banner_link')['url']; ?>"><img
                    src="<?php the_field('banner_img'); ?>"></a>
    </div>

    <div class="g-clear-both"></div>

    <div class="b-main-catalog">
        <div class="b-catalog">
            <?php if (get_field('first_six_goods')) {
                foreach (get_field('first_six_goods') as $item) {
                    $product = wc_get_product( $item['goods']); ?>
                    <div class="item">
                        <div class="image">
                            <table class="itable">
                                <tr>
                                    <td class="itd"><a href="<?= get_permalink($item['goods']); ?>"><img
                                                    src="<?php the_field('main_page_thumbnail', $item['goods']); ?>"></a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="info">
                            <div class="name"><?= get_the_title($item['goods']); ?></div>
                            <div class="price"><?= $product->price;?> <span class="rur">р<span>уб.</span></span></div>
                            <div class="desc"><?= $product->short_description;?></div>
                            <div class="buy"><a class="b-buybtn" href="<?= get_permalink($item['goods']); ?>">Купить</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
            </div>
    </div>


    <div class="b-catalog">
        <?php if (get_field('other_goods')) {
            foreach (get_field('other_goods') as $item) {
                $product = wc_get_product( $item['goods']); ?>
                <div class="item">
                    <div class="image">
                        <table class="itable">
                            <tr>
                                <td class="itd"><a href="<?= get_permalink($item['goods']); ?>"><img
                                                src="<?= get_the_post_thumbnail_url($item['goods']); ?>"></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="info">
                        <div class="name"><?= get_the_title($item['goods']); ?></div>
                        <div class="price"><?= $product->price;?> <span class="rur">р<span>уб.</span></span></div>
                        <div class="desc"><?= $product->short_description;?></div>
                        <div class="buy"><a class="b-buybtn" href="<?= get_permalink($item['goods']); ?>">Купить</a></div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>


    <div class="b-main">
        <div class="col">
            <h2 class="likeh1" umi:element-id="1" umi:field-name="h1"><?php the_field('bottom_left_title'); ?></h2>
            <div class="b-content" umi:element-id="1" umi:field-name="content">
                <p><strong><br/></strong></p>
                <?php the_field('bottom_left_desc'); ?>
                <p><strong><br/></strong></p>
            </div>
        </div>
        <div class="col">
            <h2 class="likeh1" umi:element-id="12" umi:field-name="h1"><?php the_field('bottom_right_title'); ?></h2>
            <dl class="b-reviews">
                <?php the_field('bottom_right_desc'); ?>
            </dl>
        </div>
    </div>
    </div>
    </div>
<?php
get_footer();
