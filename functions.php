<?php
    //Add the parent style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    /*We suppose this template is for web designers who prefers compressing 
    images by his own to get better quality*/
    add_filter('jpeg_quality', function($arg){return 100;});
