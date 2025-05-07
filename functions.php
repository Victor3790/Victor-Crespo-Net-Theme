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

		wp_enqueue_style(
			'vcnt-sidebar',
			VCNT_URI . '/css/sidebar.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);
	}

	if ( is_home() || is_archive() ) {
		wp_enqueue_style(
			'vcnt-archive',
			VCNT_URI . '/css/archive.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);

		wp_enqueue_style(
			'vcnt-sidebar',
			VCNT_URI . '/css/sidebar.css',
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

add_filter( 'the_category', 'vcnt_add_css_class_to_categories' );

/**
 * Add post__breadcrumbs-link css class to category link.
 *
 * @param string $categories The html anchor category list.
 */
function vcnt_add_css_class_to_categories( $categories ) {
	return str_replace( '<a ', '<a class="post__breadcrumbs-link " ', $categories );
}

add_action( 'init', 'vcnt_register_projects_cpt' );

/**
 * Register custom post type "Projects".
 */
function vcnt_register_projects_cpt() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'victor-crespo-net-theme' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'victor-crespo-net-theme' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'victor-crespo-net-theme' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'victor-crespo-net-theme' ),
		'add_new'            => _x( 'Add New', 'project', 'victor-crespo-net-theme' ),
		'add_new_item'       => __( 'Add New Project', 'victor-crespo-net-theme' ),
		'new_item'           => __( 'New Project', 'victor-crespo-net-theme' ),
		'edit_item'          => __( 'Edit Project', 'victor-crespo-net-theme' ),
		'view_item'          => __( 'View Project', 'victor-crespo-net-theme' ),
		'all_items'          => __( 'All Projects', 'victor-crespo-net-theme' ),
		'search_items'       => __( 'Search Projects', 'victor-crespo-net-theme' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'victor-crespo-net-theme' ),
		'not_found'          => __( 'No projects found.', 'victor-crespo-net-theme' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'victor-crespo-net-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
	);

	register_post_type( 'projects', $args );
}

add_action( 'add_meta_boxes', 'vcnt_add_projects_meta_boxes' );

/**
 * Add custom meta boxes for Projects post type.
 */
function vcnt_add_projects_meta_boxes() {
	add_meta_box(
		'vcnt_github_link',
		__( 'GitHub Link', 'victor-crespo-net-theme' ),
		'vcnt_render_github_link_meta_box',
		'projects',
		'normal',
		'default'
	);

	add_meta_box(
		'vcnt_wordpress_org_link',
		__( 'WordPress.org Link', 'victor-crespo-net-theme' ),
		'vcnt_render_wordpress_org_link_meta_box',
		'projects',
		'normal',
		'default'
	);
}

/**
 * Render GitHub Link meta box.
 *
 * @param WP_Post $post The post object.
 */
function vcnt_render_github_link_meta_box( $post ) {
	$value = get_post_meta( $post->ID, '_vcnt_github_link', true );
	wp_nonce_field( 'vcnt_save_github_link', 'vcnt_github_link_nonce' );
	?>
	<label for="vcnt_github_link"><?php esc_html_e( 'GitHub Repository URL:', 'victor-crespo-net-theme' ); ?></label>
	<input type="url" id="vcnt_github_link" name="vcnt_github_link" value="<?php echo esc_attr( $value ); ?>" style="width: 100%;" />
	<?php
}

/**
 * Render WordPress.org Link meta box.
 *
 * @param WP_Post $post The post object.
 */
function vcnt_render_wordpress_org_link_meta_box( $post ) {
	$value = get_post_meta( $post->ID, '_vcnt_wordpress_org_link', true );
	wp_nonce_field( 'vcnt_save_wordpress_org_link', 'vcnt_wordpress_org_link_nonce' );
	?>
	<label for="vcnt_wordpress_org_link"><?php esc_html_e( 'WordPress.org Plugin/Theme URL:', 'victor-crespo-net-theme' ); ?></label>
	<input type="url" id="vcnt_wordpress_org_link" name="vcnt_wordpress_org_link" value="<?php echo esc_attr( $value ); ?>" style="width: 100%;" />
	<?php
}

add_action( 'save_post_projects', 'vcnt_save_projects_meta_boxes', 10, 2 );

/**
 * Save custom meta box data for Projects post type.
 *
 * @param int     $post_id The ID of the post being saved.
 * @param WP_Post $post The post object.
 */
function vcnt_save_projects_meta_boxes( $post_id, $post ) {
	$test = $post;

	$github_link_nonce = isset( $_POST['vcnt_github_link_nonce'] ) ? sanitize_key( wp_unslash( $_POST['vcnt_github_link_nonce'] ) ) : '';

	if ( empty( $github_link_nonce ) || ! wp_verify_nonce( $github_link_nonce, 'vcnt_save_github_link' ) ) {
		return;
	}

	$wp_org_link_nonce = isset( $_POST['vcnt_wordpress_org_link_nonce'] ) ? sanitize_key( wp_unslash( $_POST['vcnt_wordpress_org_link_nonce'] ) ) : '';
	if ( empty( $wp_org_link_nonce ) || ! wp_verify_nonce( $wp_org_link_nonce, 'vcnt_save_wordpress_org_link' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( isset( $_POST['vcnt_github_link'] ) ) {
		$github_link = sanitize_url( wp_unslash( $_POST['vcnt_github_link'] ) );
		update_post_meta( $post_id, '_vcnt_github_link', $github_link );
	}

	if ( isset( $_POST['vcnt_wordpress_org_link'] ) ) {
		$wp_org_link = sanitize_url( wp_unslash( $_POST['vcnt_wordpress_org_link'] ) );
		update_post_meta( $post_id, '_vcnt_wordpress_org_link', $wp_org_link );
	}
}
