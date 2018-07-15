<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Township Lite
 */

get_header(); ?>
<div class="title-box" style="background-image:url(<?php echo esc_html(get_template_directory_uri().'/images/defaultbanner.jpg'); ?>)">
    <div class="container">
        <h1><?php the_title();?></h1>
  </div>
</div>
<div class="container">
    <div class="middle-align">       
        <div class="col-md-8" id="content-aa" >
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'township-lite' ),
                    'after'  => '</div>',
                ) );
                
                //If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
             
        </div>
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
        <div class="clearfix"></div>              
    </div>
</div>
<?php get_footer(); ?>