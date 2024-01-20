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
        add_action('init', array($this, 'adminAssets'));
      }
    
      function adminAssets() {
        wp_register_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
        register_block_type('ourplugin/attention-quiz', array(
          'editor_script' => 'ournewblocktype',
          'render_callback' => array($this, 'theHTML')
        ));
      }
    
      function theHTML($attributes) {
        ob_start(); ?>
        <h3>Today the sky is completely <?php echo esc_html($attributes['skyColor']) ?> and the grass is <?php echo esc_html($attributes['grassColor']) ?>!</h3>
        <?php return ob_get_clean();
      }
    }
$attentionQuiz = new AttentionQuiz();


