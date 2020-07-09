<?php /* Template Name: home */ ?>
<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<section class="home pr-0">
  <div class="container-fluid my-3 pr-0">
    <div class="row">
        <div class="col-md-5 my-5 px-5 contenido-principal">
            <div class="titulo-home text-left">
                <h2><?php echo get_post_meta(get_the_ID(), 'titulo_principal_home', true); ?></h2>
            </div>
            <div class="parrafo-home text-justify mt-5">
            <?php echo get_post_meta(get_the_ID(), 'parrafo_principal_home', true); ?>
            </div>
            <div class="boton-vm text-center my-5">
                <?php $nosotros = get_page_by_title('Nosotros');?>
                <a href="<?php echo get_permalink($nosotros -> ID);?>" class="btn btn-primary" role="button px-3">Ver más</a>
            </div>
        </div>
        <div class="col-md-7 fondo pr-0">
          <div class="imagen-home">
            <img src="<?php echo get_post_meta(get_the_ID(), 'imagen_home', true); ?>" class="img-fluid imagen" />
          </div>
        </div>
    </div>
  </div>
</section>

<div class="demo-home">
  <div class="container-fluid pb-3">
    <div class="row">
      <div class="col-md-6 contenedor-imagen">
        <img src="<?php echo get_post_meta(get_the_ID(), 'imagen_demo', true); ?>" class="img-fluid" />
      </div>
      <div class="col-md-6 my-5 px-5">
        <div class="titulo-home text-left">
          <h2><?php echo get_post_meta(get_the_ID(), 'titulo_demo', true); ?></h2>
        </div>
      <div class="parrafo-home text-justify mt-5">
        <?php echo get_post_meta(get_the_ID(), 'parrafo_descripcion_demo', true); ?>
      </div>
      <div class="boton-vm text-right my-5">
        <?php $demo = get_page_by_title('Demo');?>
        <a href="<?php echo get_permalink($demo -> ID);?>" class="btn btn-primary" role="button">Demo</a>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="noticias-home">
  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-md-6 mx-auto my-5">
        <div class="titulo my-5">
            <h2>
            <?php echo get_post_meta(get_the_ID(), 'titulo_noticias', true); ?>
            </h2>
        </div>
        <div class="mini-resumen">
          <?php echo get_post_meta(get_the_ID(), 'parrafo_noticias', true); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_footer();?>