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
        register_block_type(__DIR__, array(
          'render_callback' => array($this, 'theHTML')
        ));
      }


      function theHTML($attributes) {
        ob_start(); ?>
        <div class="paying-attention-update-me"><pre style="display: none;"><?php echo wp_json_encode($attributes) ?></pre></div>
        <?php return ob_get_clean();
      }
    }
$attentionQuiz = new AttentionQuiz();


