<?php
/**
 * The Header for CargoPress Theme
 *
 * @package CargoPress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class( CargoPressHelpers::add_body_class() ); ?>>
<?php wp_body_open() ?>
<div class="boxed-container">

    <div class="header__container">
        <div class="container">
            <header class="header py-4" role="banner">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-logo">
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <img src="<?php echo ACLP_IMAGES.'AMI_LOGO.png' ?>" alt="AMI - the leading air freight wholesaler" srcset="<?php echo ACLP_IMAGES.'AMI_LOGO.png' ?>"/>
                            </a>

                            <h1 class="main-header-text"><?php the_field('header_main_heading') ?></h1>
                        </div>

                        <div class="header-content">
                            <p class="fw-bold mb-5"><?php the_field('header_content_heading'); ?></p>
                            <p><?php the_field('header_content_text'); ?></p>
                            <a class="cta-button" href="<?php echo get_field('header_cta_button')['url'] ?>" target="<?php echo get_field('header_cta_button')['target'] ?>"><?php echo get_field('header_cta_button')['title'] ?></a>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1 d-none d-md-block">
                        <img class="header-img" src="<?php the_field('header_image');?>">
                    </div>
                </div>
            </header>
        </div>
    </div>
