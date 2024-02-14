<?php

/**
 * Airmenzies Custom Landing Pages
 *
 * @package           AirmenziesCustomLandingPages
 * @author            Ibrarr Khan
 * @copyright         2023 Ibrarr Khan
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Airmenzies Custom Landing Pages
 * Plugin URI:        https://airmenzies.com/
 * Description:       Creates custom landing pages to book callbacks & discussions
 * Version:           1.0.0
 * Author:            Ibrarr Khan
 * Author URI:        http://ibrarrkhan.com/
 * Text Domain:       airmenzies-custom-landing-pages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

require_once __DIR__ . '/vendor/autoload.php';

$templates = new \App\Templates();
$enqueueScripts = new \App\EnqueueScripts();
$svgSupport = new \App\SvgSupport();
$addAcfField = new \App\AddAcfField();


define('ACLP_IMAGES', plugin_dir_url( __FILE__ ) . 'assets/images/' );
define('ACLP_COMPONENTS', plugin_dir_path(__FILE__) . 'templates/components');
define('ACLP_DIST_PATH', plugin_dir_path(__FILE__) . 'dist/');
define('ACLP_DIST_URL', plugin_dir_url(__FILE__) . 'dist/');