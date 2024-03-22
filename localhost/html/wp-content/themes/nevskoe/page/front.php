<header class="masthead text-center">
        <div class="container">
            <div class="py-5">
                <div class="masthead-heading text-uppercase">НЕВСКОЕ БЛАГОЧИНИЕ</div>
                <div class="masthead-subheading">Санкт-Петербургская епархия</div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="masthead-img col-xl-10"><img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/front.jpeg" alt="..."></div>
            </div>
        </div>
    </header>
    
    <!-- Actions-->
    <section class="py-3" id="about">
        <div class="container">
            <div class="row justify-content-center my-5">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-xl-3 col-md-4 col-sm-12"><img class="w-100 shadow mb-5" src="<?= get_the_post_thumbnail_url($post_id, 'large')?>"
                        alt="..."></div>
                <div class="col-xl-6 col-md-8 col-sm-12 ps-md-5">
                <?php the_content(); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>