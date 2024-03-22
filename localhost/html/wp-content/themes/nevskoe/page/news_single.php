<section class="page-section">
        <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3 class="news-title"><?= get_the_title(); ?></h3>
            <div class="row">
                <div class="col-lg-4 mb-5">
                <?php 
                            if( has_post_thumbnail() ) {
                                echo '<img class="w-100" src="'.get_the_post_thumbnail_url($post_id, 'large').'" />';
                            }
                            else {
                                echo '<img class="w-100" src="'.get_bloginfo("template_url").'/assets/img/logo.png" />';
                            }
                            ?>
                </div>
                <div class="col-lg-8 px-md-5">
                <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Извините, но материал отсутствует.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>