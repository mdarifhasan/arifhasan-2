<?php
/**
 * Footer Template
 * 
 * @package Theme name
 */
?>
   <!--====== cta section start====== -->
   <section class="cta  text-center">
      <h2><?php echo esc_html__( get_theme_mod('cta_txt'), 'arif-hasan' ); ?></h2>
      <div class="cta-btn-box">
        <a href="<?php echo get_theme_mod('contact_btn_url') ?>" class="btn-border-animation ">
            <?php echo get_theme_mod('contact_btn_txt') ?>
          </a>
      </div>
    </section>
    <!--====== cta section end====== -->

    <!-- ======footer section start===== -->
    <footer id="footer" class="">
      <div class="footer-top">
        <div class="left">
          <!-- Logo -->
          <?php
            get_template_part( '/template-parts/header/logo' );
          ?>
          <!-- social box -->
         

          <div class="">
            <?php

              $contact_details = get_theme_mod('contact_details_settings');


              if( !empty($contact_details) && is_array($contact_details) ){

                foreach( $contact_details as $contact ){
                  ?>
                    <p>
                      <?php echo esc_html($contact['info_txt'] )  ?>: 
                      <span>
                        <?php echo esc_html($contact['info_details']) ?>
                      </span>
                    </p>
                  <?php
                }
              }
            ?>
          </div>
        </div>

        <!-- Newsletter -->
        <div class="newsletter-box">
          <input type="email" name="#" id="newsletter-email" />
          <input type="submit" name="#" id="newsletter-submit" value="join" />
        </div>
      </div>

      <div class="footer-bootom">
        <h2 class="copyright-text text-center">
        <?php echo esc_html( get_theme_mod( 'footer_copyright_txt' ) ) ;?> <a href="<?php echo esc_url( get_theme_mod('footer-copyright-url') ) ?>"><?php echo esc_html(get_theme_mod('footer-copyright-url-text')) ?></a>
          
        </h2>
      </div>
    </footer>
    <!-- ======footer section end===== -->

    <!-- ======= Social icons start ========== -->
    <div class="fixed-social-icon">
      <a href="#"
        ><img
          src="assets/img/facebook-icon.svg"
          data-tooltip="facebook"
          alt="" /><span></span
      ></a>
      <a href="#"
        ><img
          src="assets/img/instagram-icon.svg"
          data-tooltip="instagram"
          alt="" /><span></span
      ></a>
      <a href="#">
        <img
          src="assets/img/twitter-icon.svg"
          data-tooltip="twitter"
          alt="" /><span></span
      ></a>
      <a href="#">
        <img
          src="assets/img/linkedin-icon.svg"
          data-tooltip="linkedin"
          alt="" /><span></span
      ></a>
    </div>
    <!-- ======= Social icons end ========== -->

    <a href="#" id="scroll-to-top"><i class="fas fa-arrow-up"></i></a>
    <?php wp_footer(  ); ?>
</body>
</html>