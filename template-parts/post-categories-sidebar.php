<?php
/**
 * Post categories sidebar
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

$categories = get_categories(
	array(
		'orderby' => 'name',
		'order'   => 'ASC',
		'parent'  => 0,
	)
);

?>

<div class="sidebar pt-1 pb-1 ps-1 mb-3">
	<h3 class="sidebar__title"><?php esc_html_e( 'Categories', 'vcnt' ); ?></h3>
	<ul>
		<?php foreach ( $categories as $category ) : ?>
			<li>
				<a class="sidebar__link" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
					<?php echo esc_html( $category->name ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
