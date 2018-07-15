<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Township Lite
 */

get_header(); ?>

<?php /** slider section **/ ?>
<?php
	// Get pages set in the customizer (if any)
	$pages = array();
	for ( $count = 1; $count <= 5; $count++ ) {
		$mod = intval( get_theme_mod( 'township_lite_slidersettings-page-' . $count ) );
		if ( 'page-none-selected' != $mod ) {
			$pages[] = $mod;
		}
	}
	if( !empty($pages) ) :
		$args = array(
			'posts_per_page' => 5,
			'post_type' => 'page',
			'post__in' => $pages,
			'orderby' => 'post__in'
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) :
			$count = 1;
			?>
			<div class="slider-main">
				<div id="slider" class="nivoSlider">
					<?php
						$township_lite_n = 0;
					while ( $query->have_posts() ) : $query->the_post();
							
							$township_lite_n++;
							$township_lite_slideno[] = $township_lite_n;
							$township_lite_slidetitle[] = get_the_title();
							$township_lite_slidelink[] = esc_url(get_permalink());
							?>
								<img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $township_lite_n ); ?>" />
							<?php
						$count++;
					endwhile;
						wp_reset_postdata();
					?>
				</div>

				<?php
				$township_lite_k = 0;
			    foreach( $township_lite_slideno as $township_lite_sln ){ ?>
					<div id="slidecaption<?php echo esc_attr( $township_lite_sln ); ?>" class="nivo-html-caption">
						<div class="slide-cap  ">
							<div class="container">
								<h2><?php echo esc_html( $township_lite_slidetitle[$township_lite_k] ); ?></h2>
								<a class="read-more" href="<?php echo esc_url( $township_lite_slidelink[$township_lite_k] ); ?>"><?php  esc_html_e( 'Learn More','township-lite' ); ?></a>
							</div>
						</div>
					</div>
		    	<?php $township_lite_k++;
				} ?>
			</div>
		<?php else : ?>
				<div class="header-no-slider"></div>
			<?php
		endif;
	else : ?>
			<div class="header-no-slider"></div>
		<?php
	endif;
?>
	
<section id="about" class="darkbox" >
	<?php if( get_theme_mod('township_lite_main_title') != ''){ ?>
	    <div class="heading-line">
	      <h3><?php echo esc_html(get_theme_mod('township_lite_main_title','')); ?> </h3>
	    </div>
    <?php } ?>
	<div class="container">
		<?php 
		    $page_query = new WP_Query(array( 'category_name' => get_theme_mod('township_lite_blogcategory_setting','theblog')));?>
		  	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
		  		<div class="col-md-4 col-sm-4"> 
			    	<div class="col-md-3 col-sm-3">
			    		<div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
			    	</div>
			    	<div class="col-md-9 col-sm-9">
			    		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			    		<p><?php the_excerpt(); ?></p>
			    	</div>
			    </div>
			    <?php endwhile;
			    wp_reset_postdata();			    
			    ?>			    
		<div class="clearfix"></div>
	</div>
</section>
<?php get_footer(); ?>