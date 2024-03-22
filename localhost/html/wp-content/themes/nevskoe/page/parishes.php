<section class="page-section">
        <div class="container">
            <div class="text-center">
                <h3 class="section-subheading">Храмы благочиния</h3>
            </div>
            <div class="row text-center">
            <?php 
            $the_query = new WP_Query(array(
                    'posts_per_page' => 100,
                    'cat' => 15,
                    'paged' => $paged
                ));

                // цикл вывода полученных записей
                while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="col-lg-4 col-md-6 d-flex">
                    <a class="card w-100" href="<?= get_permalink($post_id); ?>">
                        <img src="<?= get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="...">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="card-title"> <?= get_the_title(); ?> </div>
                        </div>
                    </a>
                </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <!-- <div class="d-flex justify-content-center"> <a class="btn btn-primary btn-xl" href="#">Все храмы</a></div> -->
        </div>
    </section>