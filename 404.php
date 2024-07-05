<?php
/**
 * The not found page
 *
 * @package victor-crespo-net-theme
 */

get_header();
?>
	<!-- Not found -->
	<div class="container" style="min-height: 100vh; padding-top: 100px;">
		<div class="row mt-5">
			<div class="col" style="text-align: center;">
				<h1 class="mt-5">Página no encontrada</h1>
				<p>La página a la que estás tratando de acceder no existe.</p>
				<a href="<?php echo esc_url( home_url() ); ?>">Ir a inicio</a>
			</div>
		</div>
	</div>
<?php
get_footer();
