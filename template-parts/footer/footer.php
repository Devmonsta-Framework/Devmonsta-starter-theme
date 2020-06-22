   <?php 
      $back_to_top = sassico_option('back_to_top');     
   ?> 
   
   <?php if(defined( 'DM' )): ?>

      <?php if( is_active_sidebar('footer-left') || is_active_sidebar('footer-center') || is_active_sidebar('footer-right') ): ?> 
         <footer class="xs-footer solid-bg-two xs-footer-classic" >
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget">
                     <?php  dynamic_sidebar( 'footer-left' ); ?>

                  </div>
                  <div class="col-lg-5 col-md-6 footer-widget">
                     <?php  dynamic_sidebar( 'footer-center' ); ?>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-widget">
                     <?php  dynamic_sidebar( 'footer-right' ); ?>
                  </div>
                  <!-- end col -->
               </div>
           </div>
                  
         </footer>
      <?php endif; ?>   
   <?php endif; ?>   
   <div class="copy-right">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">

                     <div class="copyright-text">
                     <?php 
                           $copyright_text = sassico_option('footer_copyright', 'Copyright &copy; 2020 Sassico. All Right Reserved.');
                        echo sassico_kses($copyright_text);
                     ?>
                     </div>
               </div>
               <div class="col-lg-6 col-md-5">
               <?php if ( defined( 'DM' ) ) : ?>   
                     <div class="footer-social">
                        <ul class="default-footer-social-media-link">
                           
                        </ul>
                  <?php endif; ?>     
                     </div>
                     <!--Footer Social End-->
               </div>
            </div>
            <!-- end row -->
         </div>
   </div>
        <!-- end footer -->
   <?php if($back_to_top=="yes"): ?>
      <div class="back_to_top">
         <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
      </div>
   <?php endif; ?>