<?php
/**
 * Pagination
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

$items = paginate_links(
	array(
		'type'      => 'array',
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
	)
);

if ( empty( $items ) ) {
	return;
}

$new_items = str_replace( 'page-numbers', 'page', $items );
?>

<nav aria-label="Page navigation">
	<!-- Pagination -->
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="d-flex justify-content-center" style="list-style: none;">
					<?php foreach ( $new_items as $item ) : ?>
						<li class="mx-3">
							<?php echo wp_kses_post( $item ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</nav>
