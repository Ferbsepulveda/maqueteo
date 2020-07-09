<?php get_header(); ?>

        <div class="container my-5 pt-5">
            <div class="row">
            <?php if(have_posts()) : while (have_posts()) : the_post();?>
                <div class="col-12 col-md-9 my-5">
                <?php  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' ,array( 'class' => 'img-fluid' ));
            }?>
                    <h2 class="my-3">
                    <?php the_title(); ?>
                    </h2>
                    <p class="lead">
                        Fecha
                    </p>
                    <div class="text-justify">
                    <?php the_content()?>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="my-3">
                <h2>
                <?php the_title(); ?>
                </h2>
                <?php  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' ,array( 'class' => 'card-img-top img-fluid' ));
            }?>
            </div>
        </div>

<?php get_footer();?>