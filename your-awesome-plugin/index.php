<?php
/**
 * Plugin Name: Your Awesome Plugin
 * Description: This plugin provides awesome functionality used by awesome websites.
 * Author: Your Awesome Company
 * Author URI: http://www.your-awesome-website.com/
 */

\Vierbeuter\WordPress\Autoloader::register(__FILE__);
\YourAwesomeCompany\AnyNamespace\YourAwesomePlugin::activate(__FILE__);
