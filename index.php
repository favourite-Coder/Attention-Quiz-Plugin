<?php

/*
plugin Name: Attention Quiz
Description: Give your readers a multiple choice question.
Version: 1.0
Author: Favour
Author URI: 

Text Domain: wcpdomain
Domain Path: /languages

*/

if (! defined('ABSPATH')) exit; // Exit if accessed directly

class AttentionQuiz {
    function __construct() {
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
      }
    
      function adminAssets() {
        wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
      }
    }

$attentionQuiz = new AttentionQuiz();