<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Township Lite
 */
?>
<header>
	<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'township-lite' ); ?></h1>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( esc_html( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'township-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'township-lite' ); ?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Don\'t worry&hellip it happens to the best of us.', 'township-lite' ); ?></p><br />
		<div class="read-moresec">
			<div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'township-lite' ); ?></a></div>
		</div>
<?php endif; ?>