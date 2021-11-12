<?php
/**
 * Main template file
 * 
 * @package Theme Name
 */
get_header( );
?>

 <!-- =========Hero area start===== -->
 <div class="hero container">
      <div class="hero-img"></div>
      <div class="hero-desc text-right">
        <h2 class="subtitle">execute your thoughts through my code</h2>
        <h2 class="title">Hi,I am Arif Hasan</h2>
        <p>
          I am a professional <b>Web Desginer</b> & <b>Wordpress Developer</b>.
          I have been working in this sector all most 2 years. My first priority
          is client 100% saticfaction.I develop and manage my customers projects
          with a keen eye for details and a focus on time management to ensure
          on-time delivery. I have done many Wordpress Website Designs locally
          with fully satisfied customers.
        </p>
        <div class="btn-box">
          
          <a href="<?php echo get_theme_mod('contact_btn_url') ?>" class=" btn-solid  active">
            <?php echo get_theme_mod('contact_btn_txt') ?>
          </a>
          <a href="<?php esc_url( home_url().'/about' ) ?>" class="btn-border">
            <?php echo 'know more' ?>
          </a>
        </div>
      </div>
    </div>
    <!-- =========Hero area end===== -->

     <!-- ======About me section start===== -->
     <section class="about">
      <div class="about-desc">
        <h2 class=""><?php echo esc_html(get_theme_mod('about_title')) ?></h2>
        <p>
          <?php echo esc_html__( get_theme_mod('about_desc'), 'arif-hasan' ) ?>
        </p>
        <a href="#" class="btn-solid">Download cv</a>
      </div>
      <div class="about-img">
        <div class="circle">
          <img class="img" src="<?php echo esc_url(get_theme_mod('about_img_url')) ?>" alt="" />
        </div>
      </div>
    </section>
    <!-- ======About me section end===== -->

     <!-- ======Services section start======== -->
     <section class="section-services">
      <div class="service-title section-title text-center">
        <h2>Services i provide</h2>
        <h3>
        I design professional websites for businesses anywhere in the world.
        </h3>
      </div>
      <div class="service-container">
        <?php
          $args = [
            'post_type'         => 'services',
            'post_per_page'     =>3,
            'order'           =>'ASC'
          ];
          $service_query = new WP_Query($args);
          if( $service_query->have_posts(  )){
            $i = 01;
            while( $service_query->have_posts(  ) ){
              $service_query->the_post(  );
              ?>
                 <!-- Single service -->
                <div class="service-box">
                  <h2 class="service-number"><?php echo esc_html__( '0'.$i, 'arif-hasan' ) ?></h2>
                  <h3 class="service-heading"><?php esc_html( the_title( ) ) ?></h3>
                  <p class="service-details">
                    <?php 
                      esc_html( the_content( ) );
                    ?>
                  </p>
                </div>
              <?php
              $i++;
            }
            wp_reset_postdata(  );
          }
        ?>
       
      </div>
    </section>
    <!-- ======Services section end======== -->

    <!--====== Portfolio section start====== -->
    <section class="portfolio">
      <section class="portfolio-desc section-title text-center">
        <h2>demo of my work</h2>
        <h3>
          one's skill can be measure by the work which he has done before!
        </h3>
      </section>
      <!-- Portfolio container -->
      <?php
        $args = [
          'post_type'     =>'portfolios',
          'post_per_page' =>6
        ];
        $portfolio_query = new WP_Query($args);

        if($portfolio_query->have_posts(  )){
          $portfolio_terms = get_the_terms( get_the_ID(), 'portfolio_category');
          if( !empty($portfolio_terms) ){
            ?> 
              <ul class="portfolio-filter-menu">
            <?php
              foreach( $portfolio_terms as $portfolio_term){
                ?>
                  <li class="active" data-filter="all">
                    <?php echo $portfolio_term->name ?>
                  </li>
                <?php
              }
          }
          ?>
          
              <li class="active" data-filter="all">All</li>
              <li data-filter="web-design">web design</li>
              <li data-filter="wp-customization">wordpress customization</li>
              <li data-filter="wp-custom-theme">wordpress custom theme</li>
            </ul>
            <div class="portfolio-container">
          <?php
            while($portfolio_query->have_posts(  )){
              $portfolio_query->the_post(  );
              ?>
                <!-- single portfolio -->
                <div
                    class="portfolio-box 
                    <?php 
                     
                      foreach( $portfolio_terms as $portfolio_term){
                        echo $portfolio_term->slug;
                      }
                    ?>"
                    style="background: url('<?php echo esc_url(get_the_post_thumbnail_url( )) ?>')" >
                    <h2 class="title">
                      <?php
                        the_title();
                      ?>
                    </h2>
                </div>
              <?php
            }
            wp_reset_postdata(  );
            ?>
              </div>
            <?php
        }
      ?>
      
     
    </section>
    <!--====== Portfolio section end====== -->

    <!--====== Working process section start====== -->
    <section class="working-process">
      <div class="working-process-desc section-title text-center">
        <h2>want to know how do i work?</h2>
        <h3>Perfection come while walking in the right process of work</h3>
      </div>
      <div class="working-process-inside">
        <div class="working-process-box">
          <div class="animation animation-discussion"></div>
          <h2>Discussion</h2>
        </div>
        <div class="working-process-box">
          <div class="animation animation-search"></div>
          <h2>research</h2>
        </div>
        <div class="working-process-box">
          <div class="animation animation-wireframe"></div>
          <h2>wireframe</h2>
        </div>
        <div class="working-process-box">
          <div class="animation animation-main-design"></div>
          <h2>main design</h2>
        </div>
        <div class="working-process-box">
          <div class="animation animation-development"></div>
          <h2>development</h2>
        </div>
        <div class="working-process-box">
          <div class="animation animation-support"></div>
          <h2>support</h2>
        </div>
      </div>
    </section>
    <!--====== Working process section end====== -->


<?php
get_footer( );