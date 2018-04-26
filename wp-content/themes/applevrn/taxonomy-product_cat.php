<?php get_header(); ?>
    <div class="b-catalog">
        <?php while (have_posts()) : the_post();
            global $product;?>
            <div class="item">
                <div class="image">
                    <table class="itable">
                        <tr>
                            <td class="itd"><a href="<?php the_permalink(); ?>"><img
                                            src="<?php the_post_thumbnail_url(); ?>"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="info">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="price"><?php echo $product->price; ?> <span class="rur">р<span>уб.</span></span></div>
                    <div class="desc"><?php echo $product->short_description; ?></div>
                    <div class="buy"><a class="b-buybtn" href="<?php the_permalink(); ?>">Купить</a>
                    </div>
                </div>
            </div>
        <?php endwhile; // End of the loop. ?>
    </div>

    </div>
    </div>
<?php get_footer(); ?>