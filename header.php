<?php
/**
 * The header
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

require VCNT_DIR . '/inc/class-vcnt-walker-nav-menu.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Menu -->
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<a href="<?php echo esc_url( home_url() ); ?>" class="menu__link m-0">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</a>
				</div>
				<div class="col-6">
					<?php
					wp_nav_menu(
						array(
							'menu'           => 'Primary',
							'theme_location' => 'menu-1',
							'walker'         => new VCNT_Walker_Nav_Menu(),
							'container'      => 'ul',
							'menu_class'     => 'menu__list d-flex justify-content-end m-0',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
