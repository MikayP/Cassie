<?php
/*
 * Template Name: Area of Practice
 * description: >-
  Area of Practice
 */
$value = get_field( "headline", $postid );
get_header(); ?>
<?php the_nav() ?>
<div class="jumbo flex-center" style="background:url(<?php echo the_post_thumbnail_url() ?>);">

<div class="in-front">
<h1><?php wp_title(''); ?></h1>
<h2> <?php     global $wp_query;

$postid = $wp_query->post->ID;

echo get_post_meta($postid, 'headline', true);

wp_reset_query(); 
?></h2>
     
</div>
 <?php consultation_button(); ?>
</div>
<div class="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<div class="row m-5">
<div class="col-xs-12 mx-auto">
              <?php consultation_button(); ?>
            </div>
</div>

<?php get_footer(); ?>