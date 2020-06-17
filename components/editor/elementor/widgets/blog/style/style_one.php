<div class="row">
    <?php  
        while ( $post_query->have_posts() ) {
        $post_query->the_post();
    ?>
        <div class="col-lg-<?php echo esc_attr($sassico_blog_posts_clumnn); ?> col-md-6">
            <article class="sassico-blog-post">
                <?php if (has_post_thumbnail()) { ?>
                <figure class="post-image-wraper">
                    <div class="post-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <?php
                    $category_list = get_the_category_list( ', ' );
                    if( $category_list ){
                        echo '<figcaption  class="post-cats"><span class="post-cat"> '.$category_list.' </span></figcaption >';
                    }
                    ?>
                </figure>
                <?php } ?>
                <div class="sassico-post-body">
                    <div class="entry-content">
                        <h2 class="entry-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <hr>
                    </div>
                    <div class="post-footer d-flex justify-content-between">
                        <div class="post-author-info">
                            <span class="author-img">
                                <?php echo get_avatar( get_the_author_meta( "ID" )); ?>
                            </span>
                            <span class="author-name-and-date">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author-name"><?php the_author_meta('display_name'); ?></a>
                                <?php sassico_post_meta_date(); ?>
                            </span>
                        </div>
                        <?php if( function_exists('__wp_social_share_pro_check') ){
                            if( __wp_social_share_pro_check() ){
                            ?>
                            <div class="sassico-social-share-wraper align-self-center">
                                <i class="icon icon-share sassico-social-share-icon"></i>
                                <?php echo __wp_social_share( 'all', ['class' => 'sassico-social-share'] ); ?>
                            </div>
                            <?php 
                            }
                        } 
                        ?>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>
</div>