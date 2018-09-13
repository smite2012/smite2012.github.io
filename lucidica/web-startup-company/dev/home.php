<?php
  /**
   * Created by PhpStorm.
   * User: lykhachov
   * Date: 9/3/18
   * Time: 11:25
   * Template name: Homepage
   */

  get_header();
?>
  <!--  background_image_for_main_screen-->
  <section id="Home" class="main-screen" style="background-image:
      url('<?php echo get_field('background_image_for_main_screen')['url'];
  ?>');
      ">

    <div class="main-screen__content container">
      <div class="power-off-icon">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="100px"
             y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                    <g>
                      <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
                        <path
                            d="M4940.7,5004.8c-21.1-9.6-53.7-34.5-74.8-57.5c-34.5-38.3-36.4-113.1-34.5-2421c0-1311.1,1.9-2407.5,1.9-2436.3c3.8-139.9,185.9-197.4,291.4-92l55.6,55.6v2409.5c0,2616.5,5.8,2486.1-105.4,2536C5017.4,5025.9,4994.4,5025.9,4940.7,5004.8z"/>
                        <path
                            d="M3566.3,3680.3c-789.7-266.4-1531.6-805.1-2029.9-1476c-212.8-285.6-314.4-452.4-456.2-747.6C539.6,331.6,512.8-994.9,1005.4-2146.9c396.8-929.7,1142.4-1721.3,2047.2-2175.6c410.2-205.1,885.6-354.6,1351.4-423.6c279.9-40.3,856.8-46,1121.4-9.6c1006.3,134.2,1872.8,563.5,2572.4,1270.9c540.5,546.3,927.7,1232.5,1117.5,1978.2c97.8,383.4,130.3,655.6,130.3,1075.4c0,519.5-57.5,889.4-216.6,1374.4c-425.5,1297.7-1443.4,2321.3-2737.3,2754.5c-107.3,36.4-124.6,38.3-184,13.4c-74.8-30.7-107.4-80.5-107.4-161c0-95.8,59.4-145.7,253-214.7c364.2-128.4,762.9-345,1088.8-590.4c185.9-139.9,592.3-546.3,732.2-732.2c438.9-582.7,713.1-1261.3,801.2-1993.5c28.8-239.6,23-692-11.5-962.2c-184-1437.6-1152-2677.8-2507.2-3214.6c-716.9-285.6-1627.4-348.9-2382.6-164.9C2742.1-3998.6,1661-3011.4,1222-1721.4C990.1-1035.1,944.1-320.2,1087.8,377.6c277.9,1357.1,1226.8,2461.2,2530.2,2948.1c249.2,92,253,93.9,276,168.7c24.9,74.8,7.7,139.9-47.9,187.9C3782.9,3735.9,3731.2,3735.9,3566.3,3680.3z"/>
                      </g>
                    </g>
                  </svg>
      </div>
      <h2><?php echo get_field('main_screen_title'); ?></h2>
      <h2 class="main-screen__h2"><?php echo get_field('main_screen_sub_title'); ?></h2>
      <a class="scroll-down-arrow" href="#About"></a>
        <svg class="scroll-down-arrow-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000"
             enable-background="new 0 0 1000 1000" xml:space="preserve">
                      <g>
                        <path d="M990,320.4h-3.4l-491,323.1L10,320.4v37l486,322.3l490.1-323.1h3.9V320.4z"/>
                      </g>
        </svg>

    </div>
  </section>
  <section class="about-us" id="About">
    <div class="container">
      <h1><?php echo get_field('section_menu_title'); ?></h1>
      <p><?php echo get_field('section_main_text'); ?></p>
      <div class="about-us__advantages animate">
        <div class="about-us__image" style="background-image:
            url('<?php echo get_field('about_us_section_image')['url']; ?>');">
        </div>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_1'); ?></h3>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_2'); ?></h3>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_3'); ?></h3>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_4'); ?></h3>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_5'); ?></h3>
        <h3 class="about-us__single-advantage"><?php echo get_field('adv_6'); ?></h3>

      </div>
    </div>
    <div class="about-us__talking" style="background-image:
        url('<?php echo get_field('background_image_for_main_screen')['url']; ?>');">
      <div class="container">
        <p><?php echo get_field('section_quote'); ?></p>
        <p><?php echo get_field('section_quote_author'); ?></p>
      </div>
    </div>
  </section>
  <section class="our-services" id="Services">
    <div class="container">
      <h1><?php echo get_field('our_services_title'); ?></h1>
      <p><?php echo get_field('text_above_icons'); ?></p>
      <div class="our-services__visual animate">
        <figure class="circle"></figure>
        <div class="our-services__item">
          <div class="img">
            <!-- <img src="img/server.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/server.png" alt="Server">

          </div>
          <p><?php echo get_field('first_icon_text'); ?></p>
        </div>
        <div class="our-services__item">
          <div class="img">
            <!-- <img src="img/settings.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/settings.png" alt="Settings">
          </div>
          <p><?php echo get_field('second_icon_text'); ?></p>
        </div>
        <div class="our-services__item">
          <div class="img">
            <!-- <img src="img/internet.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/internet.png" alt="Internet">
          </div>
          <p><?php echo get_field('third_icon_text'); ?></p>
        </div>
        <div class="our-services__item">
          <div class="img">
            <!-- <img src="img/wordpress.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="Wordpress">
          </div>
          <p><?php echo get_field('fourth_icon_text'); ?></p>
        </div>
      </div>
      <p><?php echo get_field('text_under_icons'); ?> </p>
      <a href="#" class="button">get more information</a>
    </div>
  </section>
  <section class="our-work">
    <div class="container">
      <h1><?php echo get_field('our_works_section_title'); ?></h1>
      <p><?php echo get_field('section_text'); ?></p>
      <div class="our-work__carousel">
        <?php
          $our_works = new WP_Query(array(
              'post_type' => 'work',
              'number_posts' => -1
          ));
          while ($our_works->have_posts()) : $our_works->the_post();
            ?>
            <div class="our-work__item"><a href="<?php echo get_field('our_works_links'); ?>">

                <?php the_post_thumbnail();
                  the_title(); ?>
              </a>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <section class="pricing" id="Pricing">
    <div class="container">
      <h1><?php echo get_field('pricing_section_title'); ?></h1>
      <p><?php echo get_field('pricing_section_main_text'); ?></p>
      <p><?php echo get_field('pricing_section_secondary_text'); ?></p>
      <a href="#Contact" class="button">great, i'm in!</a></div>
  </section>
  <section class="contacts" id="Contact" style="background-image:
      url('<?php echo get_field('contact_us_background_image')['url']; ?>');">


    <div class="container">
      <h1><?php echo get_field('contact_section_title'); ?></h1>
      <p><?php echo get_field('contact_section_main_text'); ?></p>
      <div id="tip"></div>
      <form id="form" class="contacts__form form" action="" method="post">
        <div class="half-width">
          <input type="text"
                 placeholder="Name Surname"
                 name="name"
                 id="name"
                 maxlength="40"
          >

          <input type="text"
                 placeholder="Email"
                 name="email"
                 id="email"
                 maxlength="40"
          >

          <input type="text"
                 placeholder="Telephone"
                 name="telephone"
                 id="telephone"
                 maxlength="20"
          >

        </div>

        <div class="half-width">
                    <textarea placeholder="Your message"
                              name="message"
                              id="message"
                              maxlength="200"
                    ></textarea>

          <!-- <button class="button submit">send</button> -->
          <!--  <input
           type="submit"
           value="Submit"
           class="button submit"
           > -->
          <button class="button submit">Submit</button>
        </div>
      </form>
      <!--                <div id="tip" ></div>-->
      <div class="contacts__details">
        <h2><?php echo get_field('footer_main_text'); ?></h2>
        <p><?php echo get_field('footer_address'); ?></p>
        <h3><?php echo get_field('footer_secondary_text'); ?></h3>
        <p><a href="<?php echo get_field('web_site_link'); ?>"><?php echo get_field('web_site_link'); ?></a></p>
        <div class="contacts__social">
          <a href="<?php echo get_field('facebook_link'); ?>">
                      <span class="img">
                        <!-- <img src="img/icons/facebook.png" alt=""> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" alt="facebook">
                      </span>
          </a>
          <a href="<?php echo get_field('twitter_link'); ?>">
                      <span class="img">
                        <!-- <img src="img/icons/twitter.png" alt=""> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="Twitter">
                      </span>
          </a>
          <a href="<?php echo get_field('linked_in_icon'); ?>">
                      <span class="img">
                        <!-- <img src="img/icons/linkedin.png" alt=""> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" alt="Linkedin">
                      </span>
          </a>
          <a href="<?php echo get_field('google_plus_icon'); ?>">
                      <span class="img">
                        <!-- <img src="img/icons/google-plus.png" alt=""> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/google-plus.png"
                             alt="Google plus">
                      </span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
  get_footer();