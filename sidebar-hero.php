<?php
/**
 * Sidebar - hero setup.
 *
 * @package understrap
 */

?>

<?php if ( is_active_sidebar( 'hero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

		<div class="owl-carousel">

			<?php dynamic_sidebar( 'hero' ); ?>

		</div><!-- .owl-carousel -->

		</div><!-- closing owl carousel -->
<?php endif; ?>
