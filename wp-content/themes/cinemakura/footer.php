<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cinemakura
 */

?>
<!-- Footer -->
<footer class="footerColor text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section style="color:#131112;"
    class="d-flex container justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
      <img src="<?php echo get_icon_url('facebook.png');?>" alt="facebook">
      </a>
      <a href="" class="me-4 text-reset">
      <img src="<?php echo get_icon_url('twitter.png'); ?>" alt="twitter">
       </a>
      <a href="" class="me-4 text-reset">
      <img src="<?php echo get_icon_url('instagram.png'); ?>" alt="instagram">
      </a>
      <a href="" class="me-4 text-reset">
         <img src="<?php echo get_icon_url('github.png'); ?>" alt="github">
      </a>
    </div>

    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section style="color:#131112;">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-left fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Cinemaकुरा
          </h6>
          <p>
          Cinemakura is a global platform to discuss and review movies.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Popular movies
          </h6>
          <p>
            <a href="#!" class="text-reset">KGF Chapter 2</a>
          </p>
          <p>
            <a href="#!" class="text-reset">A Mero Hajur 4</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Morbius</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Fantastic Beasts</a>
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Gwarko, Lalitpur</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@cinemakura.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +977 9878654231</p>
          <p><i class="fas fa-print me-3"></i> +977 9878654231</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4">
    © 2022 Copyright: 
    <a class="text-reset fw-bold" href="#">SURaJ.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
