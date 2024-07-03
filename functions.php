<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

// Get theme directory path.
if ( ! defined( 'VCNT_DIR' ) ) {
	define( 'VCNT_DIR', get_template_directory() );
}

// Get theme directory uri.
if ( ! defined( 'VCNT_URI' ) ) {
	define( 'VCNT_URI', get_template_directory_uri() );
}

// Define version.
if ( ! defined( 'VCNT_VER' ) ) {
	define( 'VCNT_VER', '1.0.0' );
}

add_action( 'after_setup_theme', 'vcnt_setup' );

/**
 * Add theme support for special features and menus.
 */
function vcnt_setup() {

	// Title tag support.
	add_theme_support( 'title-tag' );

	// Main menu.
	register_nav_menus(
		array(
			'menu-1' => 'Primary',
		)
	);
}

add_action( 'wp_enqueue_scripts', 'vcnt_load_assets' );

/**
 * Load the theme's css and scripts
 */
function vcnt_load_assets() {
	wp_enqueue_style(
		'vcnt-bootstrap-reboot',
		VCNT_URI . '/css/bootstrap.css',
		array(),
		VCNT_VER
	);

	wp_enqueue_style(
		'vcnt-style',
		VCNT_URI . '/style.css',
		array(),
		VCNT_VER
	);

	if ( is_front_page() ) {
		wp_enqueue_style(
			'vcnt-home',
			VCNT_URI . '/css/home.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);
	}

	if ( is_single() ) {
		wp_enqueue_style(
			'vcnt-post',
			VCNT_URI . '/css/post.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);
	}
}

add_action( 'wp_footer', 'vcnt_add_animation_scripts' );

/**
 * Add animations script on home page
 */
function vcnt_add_animation_scripts() {
	if ( is_front_page() ) {
		?>
		<script id="home-animations">
			let options = {
				root: null,
				rootMargin: "0px",
				threshold: 1.0,
			};

			/*** Hero animations ***/
			let wpLogo = document.querySelector('.hero__pic');

			window.addEventListener("DOMContentLoaded", (e) => {
				setTimeout(()=>{
					wpLogo.classList.add('animate');
				}, 900);
			});

			/*** About animations ***/
			let me = document.querySelector('.about__pic');

			let mePicDrawn = false;
			let mePicObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !mePicDrawn) {
							// Show pic
							me.classList.add('animate');
						}
					});
				},
				options
			).observe(document.querySelector('.about__pic-container'));

			/*** Services animations ***/
			// Paths
			let pluginPaths = document.querySelectorAll('#plugin-icon path');
			let themePaths = document.querySelectorAll('#theme-icon path');
			let themeCircle = document.querySelectorAll('#theme-icon circle');
			let blockPaths = document.querySelectorAll('#block-icon path');

			themeCircle[0].style.visibility = 'hidden';
			initSvgPaths(pluginPaths);
			initSvgPaths(themePaths);
			initSvgPaths(blockPaths);

			let themeIconDrawn = false;
			let themeObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !themeIconDrawn) {
							// Draw the icon
							themeCircle[0].style.visibility = 'visible';
							fillSvgPaths(themePaths);
							themeIconDrawn = true;
						}
					});
				},
				options
			).observe(document.querySelector('#theme-icon-container'));

			let pluginIconDrawn = false;
			let pluginObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !pluginIconDrawn) {
							// Draw the icon
							fillSvgPaths(pluginPaths);
							pluginIconDrawn = true;
						}
					});
				},
				options
			).observe(document.querySelector('#plugin-icon-container'));

			let blockIconDrawn = false;
			let blockObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !blockIconDrawn) {
							// Draw the icon
							fillSvgPaths(blockPaths);
							blockIconDrawn = true;
						}
					});
				},
				options
			).observe(document.querySelector('#block-icon-container'));

			/*** Testimonials animation ***/
			let testimonialsPaths = document.querySelectorAll('#testimonials-icon path');

			initSvgPaths(testimonialsPaths);

			let testimonialsIconDrawn = false;
			let testimonialsObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !testimonialsIconDrawn) {
							// Draw the icon
							fillSvgPaths(testimonialsPaths);
							testimonialsIconDrawn = true;
						}
					});
				},
				options
			).observe(document.querySelector('#testimonials-icon-container'));

			/*** Contact animation ***/
			let contactPaths = document.querySelectorAll('#contact-icon path');

			initSvgPaths(contactPaths);

			let contactIconDrawn = false;
			let contactObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if(entry.isIntersecting && !contactIconDrawn) {
							// Draw the icon
							fillSvgPaths(contactPaths);
							contactIconDrawn = true;
						}
					});
				},
				options
			).observe(document.querySelector('#contact-icon-container'));

			/*** Functions ***/
			function initSvgPaths(paths) {
				paths.forEach((path) => {
					let pathLength = path.getTotalLength();

					path.style.strokeDasharray = pathLength;
					path.style.strokeDashoffset = pathLength;
				});
			}

			function fillSvgPaths(paths) {

				paths.forEach((path, index, listObj) => {
					let fillpercentage = 0;

					const intervalId = setInterval(() => {
						if (fillpercentage > 1) {
							clearInterval(intervalId); // Stop the interval once the fillpercentage exceeds 1
						} else {

							let pathLength = path.getTotalLength();

							path.style.strokeDasharray = pathLength;

							let drawLength = pathLength * fillpercentage;

							path.style.strokeDashoffset = pathLength - drawLength;
							fillpercentage += 0.1; // Increment the fillpercentage by 0.1
						}
					}, 90); 
				});
			}
		</script>
		<?php
	}
}
