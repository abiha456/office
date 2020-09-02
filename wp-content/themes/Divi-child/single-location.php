<?php get_header(); 

?>

<section class="main-title et_pb_section">
    <div class="container">
        <h1><?php echo strtoupper(the_title()) ?></h1>
        <?php et_divi_post_meta(); ?>
    </div>
</section>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="half-col1">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="half-col2">
                <h3><?php the_title(); ?></h3>

                <p>Address: <?php the_field('address') ?></p>
                    
                <p>Phone: <?php the_field('number') ?></p>
            </div>
        </div>
    </div>
</div>