<section class="page-section">
        <div class="container">
            <h3 class="section-subheading text-center">Новости благочиния</h3>
            <div class="row">
                <?php 
                $the_query = new WP_Query(array(
                        'posts_per_page' => 6,
                        'cat' => 2,
                        'paged' => $paged
                    ));
                    while ($the_query->have_posts()) {
                    $the_query->the_post();

                    if( has_post_thumbnail() ) {
                        $img_url = get_the_post_thumbnail_url($post_id, 'large');
                    }
                    else {
                        $img_url = get_bloginfo("template_url").'/assets/img/logo.jpg';
                    }
                    ?>
              <div class="col-lg-4 col-md-6 d-flex">
                    <a class="card w-100" href="<?= get_permalink($post_id); ?>">
                         
                        <div class="card-img">
                            <img src="<?= $img_url?>">
                        </div> 
                        
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="card-title"> <?= get_the_title(); ?> </div>
                        </div>
                    </a>
                </div>
                <?php
                }
                wp_reset_postdata();?> 
            </div>
            <nav class="mt-3">
                <?php custom_pagination() ?>
            </nav>

        </div>
    </section>