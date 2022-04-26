<?php

/**
* Plugin Name: My First Plugin
* Plugin URI: http://fit.tdc.edu.vn
* Description: The very first plugin that I have ever created.
* Version: 1.0
* Author: Your Name
* Author URI: http://www.mywebsite.com
*/

add_action( 'init', 'my_thank_you_text' );

function my_thank_you_text (){

$args = array(
    'post_type'=>'post', //Loại là post
    'orderby' => 'rand', //Lấy ngẫu nhiên
    'posts_per_page' => 5 //Lấy 5 bài post 1 trang
 );
 $the_query = new WP_Query( $args );
 if ($the_query->have_posts()):
    while ($the_query->have_posts()):
        $the_query->the_post();
        echo the_title("<br>");
    endwhile;endif;
}