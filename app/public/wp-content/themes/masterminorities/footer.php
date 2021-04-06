<!-- <footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
          <p><a class="site-footer__link" href="#">555.555.5555</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer> -->
  <div class="container footer">
    <div class="row d-flex align-items-top">
      <div class="col-xs-12 col-sm-4 text-left justify-content-left">
      <h3>Explore</h3>
      <?php wp_nav_menu(array(
        'theme_location' => 'footerMenu'
        )) ?>
      </div>
      <div class="col-xs-12 col-sm-4 text-left justify-content-left">
        <h3>Contact</h3>
        <a href="tel:360-809-0305">(360)-809-0305</a>
        <p>1612 S. 108th street, Tacoma WA 98444</p>
      </div>
      <div class="col-xs-12 col-sm-4 text-left justify-content-left">
        <h3>Stay Connected</h3>
      </div>
      <div class="col-12 text-center justify-content-center">
        <p>2019 Copyright <a target="_blank" href="https://brcdevelopers.com">BRC Developers</a></p>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
</body>
</html>