<?php
get_header();
?>

<main class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1><?php echo esc_html( get_field('hero_title') ?: 'Lessons and insights' ); ?> <span><?php echo esc_html( get_field('hero_title_accent') ?: 'from 8 years' ); ?></span></h1>
                    <p><?php echo esc_html( get_field('hero_subtitle') ?: 'Where to grow your business as a photographer: site or social media?' ); ?></p>
                    <a href="<?php echo esc_url( get_field('hero_button_url') ?: '#' ); ?>" class="btn-green"><?php echo esc_html( get_field('hero_button_text') ?: 'Register' ); ?></a>
                </div>
                <div class="hero-image">
                    <?php 
                    $hero_img = get_field('hero_image');
                    if ( $hero_img ) : ?>
                        <img src="<?php echo esc_url( $hero_img['url'] ); ?>" alt="Hero">
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-illustration.svg' ); ?>" alt="Hero Illustration">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="container">
            <h2>Our Clients</h2>
            <p>We have been working with some Fortune 500+ clients</p>
        </div>
    </section>
</main>

<?php
get_footer();
