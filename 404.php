<?php
/**
 * The not found page
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

get_header();
?>
	<!-- Not found -->
	<div class="container" style="min-height: 100vh; padding-top: 100px;">
		<div class="row mt-5">
			<div class="col" style="text-align: center;">
				<h1 class="mt-5"><?php esc_html_e( 'Page not found', 'vcnt' ); ?></h1>
				<p><?php esc_html_e( 'The page you are trying to access does not exist', 'vcnt' ); ?></p>
				<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'vcnt' ); ?></a>
			</div>
		</div>
	</div>
<?php
get_footer();
