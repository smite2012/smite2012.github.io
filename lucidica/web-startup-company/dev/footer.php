<?php
  /**
   * Created by PhpStorm.
   * User: lykhachov
   * Date: 9/3/18
   * Time: 11:25
   */
?>

<footer class="footer">
  <!-- <img class="footer__logo" src="img/logo.png" alt=""> -->
  <!--              <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.png" alt="Logo">-->
  <?php if (function_exists('the_custom_logo')) {
    the_custom_logo();
  } ?>
</footer>

<button class="btn-top" title="Go to top">

  <svg class="btn-top-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 51.636 51.636" style="enable-background:new 0 0 51.636 51.636;" xml:space="preserve">
            <path d="M51.353,0.914c-0.295-0.305-0.75-0.39-1.135-0.213L0.583,23.481c-0.399,0.184-0.632,0.605-0.574,1.041
              s0.393,0.782,0.826,0.854l22.263,3.731l2.545,21.038c0.054,0.438,0.389,0.791,0.824,0.865c0.057,0.01,0.113,0.015,0.169,0.015
              c0.375,0,0.726-0.211,0.896-0.556l24-48.415C51.72,1.675,51.648,1.218,51.353,0.914z M27.226,46.582l-2.232-18.457
              c-0.054-0.44-0.391-0.793-0.828-0.866L4.374,23.941L48.485,3.697L27.226,46.582z"/>
            </svg>

</button>

<!-- <script src="js/libs.js"></script> -->
<!-- <script src="js/main.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
