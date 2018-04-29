<?php
/**
 * Template Name: trade-in
 */
get_header(); ?>
<div class="b-default">
    <h1 umi:element-id="4" umi:field-name="h1"><?php the_title(); ?></h1>
    <div class="b-content" umi:element-id="4" umi:field-name="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>

</div>
</div>
<?php get_footer(); ?>
