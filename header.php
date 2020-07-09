<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>

<header class="header">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-4 col-8 mb-md-0 px-5">
        <a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo get_template_directory_uri();?>/images/Logo.png" class="img-fluid"></a>
      </div>
      <div class="col-md-8 fondo">
        <nav class="navbar navbar-expand-md navbar-light justify-content-center">
          <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <?php
            $args = array(
              'menu_class' => 'nav nav-justified flex-column flex-md-row text-center justify-content-lg-end my-3 py-3',
              'container_id' => 'nav_principal',
              'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end',
              'theme_location' => 'menu_principal'
          );
          wp_nav_menu($args);
          ?>

        </nav>
      </div>
    </div>
  </div>
</header>















  </head> 