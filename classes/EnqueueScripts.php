<?php

namespace App;

class EnqueueScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function enqueue_scripts()
    {
        if (is_page_template('templates/callback-discussion.php')) {
            $my_css_ver  = date("ymd-Gis", filemtime(ACLP_DIST_PATH.'css/app.css'));
            $my_js_ver = date("ymd-Gis", filemtime(ACLP_DIST_PATH.'js/app.js'));

            wp_register_style('airmenzies-custom-landing-pages-style', ACLP_DIST_URL.'css/app.css', [], $my_css_ver, 'all');
            wp_enqueue_style('airmenzies-custom-landing-pages-style');

            wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap', false);
            wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap', false);

            wp_register_script('airmenzies-custom-landing-pages-script', ACLP_DIST_URL.'js/app.js', ['jquery'], $my_js_ver, true);
            wp_enqueue_script('airmenzies-custom-landing-pages-script');
        }
    }
}
