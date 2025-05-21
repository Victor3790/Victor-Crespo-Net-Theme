<?php
/**
 * Post categories sidebar
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

$recent_posts = wp_get_recent_posts(
	array(
		'numberposts' => 5,
		'post_status' => 'publish',
	)
);

?>

<div class="sidebar pt-1 pb-1 ps-1 mb-3">
	<h3 class="sidebar__title">Entradas recientes</h3>
	<ul>
		<?php foreach ( $recent_posts as $recent_post ) : ?>
			<li>
				<a class="sidebar__link" href="<?php echo esc_url( get_permalink( $recent_post['ID'] ) ); ?>">
					<?php echo esc_html( $recent_post['post_title'] ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
