<?php

/*
plugin Name: Attention Quiz
Description: 
Manage engaging quizzes effortlessly with the Attention Quiz Plugin 
for WordPress. Admins can create questions, set options, and mark correct answers 
with a star. Customize the quiz background color with an easy-to-use color picker

Version: 1.0
Author: Favour Gabriel
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


