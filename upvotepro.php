<?php
/**
 * Plugin Name: Upvote Pro - Smart Review System
 * Plugin URI: https://yourwebsite.com/
 * Description: A simple review system with ratings, custom fields, and voting.
 * Version: 1.0.0
 * Author: Hassan Hafeez
 * Author URI: https://yourwebsite.com/
 * License: GPL2
 */

 if(!defined('ABSPATH')){
    exit;
 }

 //include required files
 require_once plugin_dir_path(__FILE__).'includes/class-review-cpt.php';
 require_once plugin_dir_path(__FILE__).'includes/class-review-display.php';
 require_once plugin_dir_path(__FILE__).'class-review-form.php';
 require_once plugin_dir_path(__FILE__).'class-review-meta.php';
 require_once plugin_dir_path(__FILE__).'class-review-vote.php';