<?php if ( is_front_page() ) {
    $align_nav = "justify-content-center";
    $logo_hide = "d-lg-none";
}else {
    $align_nav = "justify-content-end";
}
?>
<div class="navbar navbar-expand-lg navbar-dark py-md-3" id="mainNav">
        <div class="container">
            <div class="logo <?= $logo_hide ?>"> <a class="navbar-brand" href="/"> НЕВСКОЕ БЛАГОЧИНИЕ</a></div>
            <div class="nav-burger"><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button></div>
            <div class="offcanvas offcanvas-end offcanvas-size-sm" id="offcanvasDarkNavbar" tabindex="-1"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header pb-0"><button class="btn-close btn-close-white" type="button"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
                <div class="offcanvas-body pt-0 <?= $align_nav ?>">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">О благочинии</a></li>
                        <li class="nav-item"><a class="nav-link" href="/category/parishes">Приходы</a></li>
                        <li class="nav-item"><a class="nav-link" href="/category/news/">Новости</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Деятельность</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Благотворительность</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#contacts">Контакты </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>