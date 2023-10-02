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
                <div class="header__logo">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo ACLP_IMAGES.'AMI_LOGO.png' ?>" alt="AMI - the leading air freight wholesaler" srcset="<?php echo ACLP_IMAGES.'AMI_LOGO.png' ?>"/>
                    </a>

                    <h1 class="header-text">click2ship</h1>
                </div>
            </header>
        </div>
    </div>
