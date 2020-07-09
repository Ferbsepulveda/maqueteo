
      <footer class="footer fixed-bottom pt-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php
                  $args = array(     
                    'menu_class' => 'nav nav-justified flex-column flex-md-row text-center justify-content-lg-end',
                    'theme_location' => 'menu_principal'
                  );
                  wp_nav_menu( $args );
              ?>
            </div>
          </div>
        </div>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>