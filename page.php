<?php get_header()?>

        <div class="container my-5 pt-5">
        <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <h2 class="titulo"><?php the_title(); ?></h2>
            <div class="text-justify">
              <?php the_content()?>

            </div>
            <?php endwhile; endif; ?>
        </div>

<?php get_footer()?>