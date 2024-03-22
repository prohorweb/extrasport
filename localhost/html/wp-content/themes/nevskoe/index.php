<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Невское благочние</title><!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
</head>

</html>

<body id="page-top">
    
    <!-- Navigation -->
    <?php get_template_part('section/nav')?>
    
    <!-- Front page -->
    <?php if (is_front_page())  {
        get_template_part('page/front');
    }?>
    
    <!-- News page -->
    <?php if (is_category('2'))  {
        get_template_part('page/news');
    } elseif ( in_category( '2' )) {
        get_template_part('page/news_single');
     }?>

    <!-- Parishes page -->
    <?php if (is_category('15'))  {
        get_template_part('page/parishes');
    } elseif ( in_category( '15' )) {
        get_template_part('page/parish_single');
    }?>
    
    <!-- Map-->
    <?php get_template_part('section/map')?>
    
    <!-- Footer-->
    <footer id="contacts">
        <div class="footer-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><a class="fa-regular fa-envelope pe-1"></a>благочиния: <a
                                href="mailto:mail@nevskoeblago.ru">mail@nevskoeblago.ru</a></p>
                        <p><a class="fa-regular fa-envelope pe-1"></a>по направлению образования: <a
                                href="mailto:education@nevskoeblago.ru">education@nevskoeblago.ru</a></p>
                        <p><a class="fa-regular fa-envelope pe-1"></a>по направлению соц.работы: <a
                                href="mailto:social@nevskoeblago.ru">social@nevskoeblago.ru </a></p>
                    </div>
                    <div class="col-md-6">
                        <p><a class="fa-brands fa-vk pe-2 fs-4"></a>благочиния: <a href="https://vk.com/nevskblagspb"
                                target="_blunk">https://vk.com/nevskblagspb</a></p>
                        <p><a class="fa-brands fa-vk pe-2 fs-4"></a>социального служения: <a
                                href="https://vk.com/socialnevskoeblago"
                                target="_blunk">https://vk.com/socialnevskoeblago</a></p>
                        <p><a class="fa-brands fa-vk pe-2 fs-4"></a>молодёжи и миссионерское служение: <a
                                href="https://vk.com/nevamolodaya" target="_blunk">https://vk.com/nevamolodaya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-md-start">&copy; 2024 Невское благочиние</div>
                    <div class="col-md-8 text-md-end">Разработка сайта <a class="text-decoration-none" href="#!"
                            target="_blunk">Прохор Ефимов</a></div>
                </div>
            </div>
        </div>
    </footer><!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.18.1/minified.js"></script><!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>
    <?php wp_footer(); ?>

</body>