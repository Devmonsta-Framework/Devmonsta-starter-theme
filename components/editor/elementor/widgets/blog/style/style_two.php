<div class="swiper-container xs_blog_slider" data-slidesPerView="<?php echo esc_attr($sassico_blog_posts_clumnn); ?>">
    <div class="swiper-wrapper">
    <?php  
        $i = 0;
        while ( $post_query->have_posts() ) {
        $post_query->the_post();
    ?>
        <?php if ($blog_style_changer == 'image_only' && has_post_thumbnail()) { ?>
        <div class="swiper-slide">
            <article class="xs_blog_image_card text-center d-flex flex-column justify-content-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="xs_blog_image_card_content">
                    <div class="entry-content">
                        <h2 class="entry-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-author-info style_2">
                        <span class="author-name-and-date">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author-name"><?php the_author_meta('display_name'); ?></a>
                        </span>
                        <span class="author-img">
                            <?php echo get_avatar( get_the_author_meta( "ID" )); ?>
                        </span>
                    </div>
                </div>
            </article>
        </div>
        <?php }?>
        <!-- / end blog post image only style -->
        <?php if ($blog_style_changer == 'text_only') { ?>
        <div class="swiper-slide">
            <article class="xs_blog_text_card text-center d-flex flex-column justify-content-center">
                <div class="xs_blog_text_card_content">
                    <div class="entry-content">
                        <p><?php echo wp_trim_words(get_the_content(), 27, '...'); ?></p>
                    </div>
                    <div class="post-author-info style_2">
                        <span class="author-name-and-date">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author-name"><?php the_author_meta('display_name'); ?></a>
                        </span>
                        <span class="author-img">
                            <?php echo get_avatar( get_the_author_meta( "ID" )); ?>
                        </span>
                    </div>
                    <div class="entry-footer">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html__('Read More', 'sassico');?></a>
                    </div>
                </div>
            </article>
        </div>
        <?php }; ?>
        <!-- / end blog post text only style -->
        <?php if ($blog_style_changer == 'mixed_up') { ?>
        <?php if($i%2 == 0) { ?>
        <?php if(has_post_thumbnail()) { ?>
        <div class="swiper-slide">
            <article class="xs_blog_image_card text-center d-flex flex-column justify-content-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="xs_blog_image_card_content">
                    <div class="entry-content">
                        <h2 class="entry-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-author-info style_2">
                        <span class="author-name-and-date">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author-name"><?php the_author_meta('display_name'); ?></a>
                        </span>
                        <span class="author-img">
                            <?php echo get_avatar( get_the_author_meta( "ID" )); ?>
                        </span>
                    </div>
                </div>
            </article>
        </div>
        <?php } ?>
        <?php } else {?>
        <div class="swiper-slide">
            <article class="xs_blog_text_card text-center d-flex flex-column justify-content-center">
                <div class="xs_blog_text_card_content">
                    <div class="entry-content">
                        <p><?php echo wp_trim_words(get_the_content(), 27, '...'); ?></p>
                    </div>
                    <div class="post-author-info style_2">
                        <span class="author-name-and-date">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author-name"><?php the_author_meta('display_name'); ?></a>
                        </span>
                        <span class="author-img">
                            <?php echo get_avatar( get_the_author_meta( "ID" )); ?>
                        </span>
                    </div>
                    <div class="entry-footer">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html__('Read More', 'sassico');?></a>
                    </div>
                </div>
            </article>
        </div>
        <?php }?>
        <?php $i++; }?>
        <!-- / end blog post mixed up style -->
        <?php } ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-button-next xs_blog_slider_nav_button">
    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/blue-right-arrow.svg" alt="blue-right-arrow">
</div>
<div class="swiper-button-prev xs_blog_slider_nav_button">
    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/blue-leftt-arrow.svg" alt="blue-left-arrow">
</div>