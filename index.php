<?php get_header();?>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-5">
                    <div class="titulo-home text-center mb-5">
                        <h2>Amulen</h2>
                    </div>
                    <div class="parrafo-home px-5 text-justify">

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, cupiditate voluptates aliquam dolores fugit amet quibusdam alias eos ipsam autem placeat iure, dignissimos obcaecati. Blanditiis, labore sapiente vitae magni quidem dolor illo nihil! Totam repellendus sequi id molestiae, iste tenetur rerum distinctio animi atque rem libero suscipit quas impedit nesciunt.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, cupiditate voluptates aliquam dolores fugit amet quibusdam alias eos ipsam autem placeat iure, dignissimos obcaecati. Blanditiis, labore sapiente vitae magni quidem dolor illo nihil! Totam repellendus sequi id molestiae, iste tenetur rerum distinctio animi atque rem libero suscipit quas impedit nesciunt.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-5">
                    <div class="imagen-home img-fluid px-3">
                        <img src="https://via.placeholder.com/500x400">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container">
          <div class="row">
            <?php if(have_posts()) : while (have_posts()) : the_post();?>
            <div class="card" style="width: 18rem;">
            
                <a href="<?php the_permalink(); ?>"> <?php  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' ,array( 'class' => 'card-img-top img-fluid' ));
            }?></a>
                <div class="card-body">
                  <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                  <p class="card-text"> <?php the_excerpt();?></p>
                </div>
              </div>
<?php endwhile; endif; ?>
            <div class="boton-ver col-12 text-center mb-5">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
<?php get_footer();?>        


