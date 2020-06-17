<?php

 $blog_related_post = sassico_option('blog_related_post','no');
 $blog_related_post_number = sassico_option('blog_related_post_number',3);

?>
<?php if($blog_related_post=="yes"): ?>
   <?php 
      $related_post = sassico_related_posts_by_tags($post->ID,$blog_related_post_number);
      ?>
      <div class="row">
      <?php
      if( $related_post->have_posts() ) {
         while ($related_post->have_posts()) : $related_post->the_post(); ?>
         <div class="col-lg-6">
            <div class="recent-project-wrapper">
               <div class="recent-project-img">
                  
                  <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php the_title_attribute(); ?> ">
               </div>
               <!-- end recent-project-img -->
               <div class="recent-project-info">
                  <p class="project-title"><?php echo get_the_date();  ?></p>
                  <h3 class="ts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               </div>
               <!-- end recent-project-info -->
            </div>
         </div>
   <?php
     endwhile;
   } ?>
   </div>
    <?php wp_reset_postdata();
  
  ?>
<?php endif; ?>
