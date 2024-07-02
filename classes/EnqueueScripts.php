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
        $main_css_ver  = date("ymd-Gis", filemtime(ACLP_DIST_PATH.'css/app.css'));
        $main_js_ver = date("ymd-Gis", filemtime(ACLP_DIST_PATH.'js/app.js'));

        wp_enqueue_style('airmenzies-custom-landing-pages-style', ACLP_DIST_URL.'css/app.css', [], $main_css_ver, 'all');
        wp_enqueue_script('airmenzies-custom-landing-pages-script', ACLP_DIST_URL.'js/app.js', ['jquery'], $main_js_ver, true);

	    if (is_page_template('templates/callback-discussion.php')) {
		    $testimonial_ver = date("ymd-Gis", filemtime(ACLP_DIST_PATH.'js/testimonial.js'));
		    wp_enqueue_script('airmenzies-custom-landing-page-testimonial', ACLP_DIST_URL.'js/testimonial.js', ['jquery'], $testimonial_ver, true);
	    }

        wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap', false);
        wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap', false);
    }
}
