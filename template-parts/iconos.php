<section class="modulos">
    <div class="col-md-3">
        <?php $iconos = get_post_meta (get_the_ID(), 'titulo_modulo'
        <div class="icono-modulo">
            <?php echo get_post_meta(get_the_ID(), 'titulo_modulo', true); ?>
        </div>
        <div class="titulo-modulo">
            <h2><?php echo get_post_meta(get_the_ID(), 'titulo_modulo', true); ?></h2>
        </div>
        <div class="descripcion-modulo">
        
        </div>
    </div>
</section>