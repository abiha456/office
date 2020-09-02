<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri().'/style.css' );
  
    
}

add_shortcode('locations','callback_locations');

function callback_locations(){
   $arg = array(
      'post_type'       => 'location',
      'posts_per_page'  => 4,
      'order_by'        => 'id',
      'order'           => 'asc'
   );

   $query = new WP_Query( $arg );

   $html = '';

   if($query->have_posts()) :
      while($query->have_posts()) : $query->the_post();
         $html .= '<a href="'.get_the_permalink().'" class="title">'.get_the_title().'</a>';
         $html .= '<p class="number">Address: '.get_field('address').'</p>';
         $html .= '<p class="number">Phone: '.get_field('number').'</p>';
         $html .= '<a href="'.get_the_permalink().'" class="rm-btn">Read More</a>';
      endwhile;
   endif;
   return $html;
}
