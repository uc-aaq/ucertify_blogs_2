<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package uCertify-WP-Blog-Theme
 */

get_header(); ?>

<body>
    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-spinner">
            <lottie-player 
                src="<?php echo get_template_directory_uri(); ?>/assets/json/blog-loader-1.json"
                background="transparent" 
                speed="1" 
                loop 
                autoplay>
            </lottie-player>
        </div>
    </div>

<main class="page-wrapper">
    <!-- Static Header, Breadcrumb Blog Navigation Starts -->
    <?php get_template_part('template-parts/uc-header'); ?>
    <!-- Static Header, Breadcrumb Blog Navigation Ends -->

    <!-- Page content -->
    <section class="bg-secondary">
        <div class="container d-flex flex-column h-100 align-items-center position-relative zindex-5 py-5">
            <div class="text-center pt-5 pb-3 mt-auto">
                <!-- Parallax gfx (Light version) -->
                <div class="parallax mx-auto d-dark-mode-none" style="max-width: 574px;">
                    <div class="parallax-layer" data-depth="-0.15">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/light/layer01.png" alt="Layer">
                    </div>
                    <div class="parallax-layer" data-depth="0.12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/light/layer02.png" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-5" data-depth="-0.12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/light/layer03.png" alt="Layer">
                    </div>
                </div>
                <!-- Parallax gfx (Dark version) -->
                <div class="parallax mx-auto d-none d-dark-mode-block" style="max-width: 574px;">
                    <div class="parallax-layer" data-depth="-0.15">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/dark/layer01.png" alt="Layer">
                    </div>
                    <div class="parallax-layer" data-depth="0.12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/dark/layer02.png" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-5" data-depth="-0.12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/dark/layer03.png" alt="Layer">
                    </div>
                </div>
                <h1 class="visually-hidden">404</h1>
                <h2 class="display-5">Ooops!</h2>
                <p class="fs-xl pb-3 pb-md-0 mb-md-5">The page you are looking for is not available.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-lg btn-primary shadow-primary w-sm-auto w-100">
                    <i class="bx bx-home-alt me-2 ms-n1 lead"></i>
                    Go to homepage
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>