<?php
/**
 * The English version of the front page
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

?>
	<!-- Hero -->
	<div class="hero">
		<div class="container hero__container">
			<div class="row hero__row">
				<div class="col-12 col-md-6 order-2 order-md-1 hero__text-container mb-5 mb-md-0">
					<h1 class="hero__title mb-0">WordPress Developer</h1>
					<h2 class="hero__subtitle my-4 my-md-3">Victor Crespo</h2>
					<p class="mb-4 mb-md-3">
						While there are a large number of plugins and themes for WordPress available online, 
						there are very specific needs that these don't quite cover or don't address 
						in the best way. 
						Throughout my career as a WordPress developer, 
						I've been able to create solutions to meet these kinds of requirements. 
						Learn more about my professional experience.
					</p>
					<a href="#about-section" class="button hero__cta">
						About me
					</a>
				</div>
				<div class="col-12 col-md-6 order-1 order-md-2 hero__pic-container">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="hero__pic" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"> 
						<path display="inline" d="M256,0.5C115.117,0.5,0.5,115.109,0.5,255.992C0.5,396.874,115.117,511.5,256,511.5
								c140.879,0,255.5-114.626,255.5-255.508C511.5,115.109,396.879,0.5,256,0.5z M26.287,255.992c0-33.306,7.145-64.923,19.89-93.488
								l109.582,300.225C79.117,425.502,26.287,346.914,26.287,255.992z M256,485.722c-22.547,0-44.309-3.307-64.898-9.361l68.932-200.274
								l70.604,193.446c0.466,1.135,1.035,2.179,1.646,3.165C308.406,481.102,282.748,485.722,256,485.722z M287.659,148.286
								c13.827-0.724,26.29-2.179,26.29-2.179c12.376-1.464,10.916-19.658-1.468-18.93c0,0-37.207,2.919-61.23,2.919
								c-22.568,0-60.494-2.919-60.494-2.919c-12.388-0.728-13.839,18.198-1.456,18.93c0,0,11.715,1.455,24.095,2.179l35.784,98.063
								l-50.277,150.767l-83.649-248.83c13.84-0.724,26.286-2.179,26.286-2.179c12.372-1.464,10.912-19.658-1.468-18.93
								c0,0-37.198,2.919-61.222,2.919c-4.309,0-9.386-0.108-14.784-0.283C105.141,67.457,175.745,26.274,256,26.274
								c59.8,0,114.251,22.868,155.121,60.315c-0.989-0.058-1.958-0.183-2.978-0.183c-22.563,0-38.574,19.653-38.574,40.771
								c0,18.93,10.92,34.948,22.564,53.874c8.737,15.299,18.938,34.953,18.938,63.355c0,19.657-7.56,42.475-17.479,74.259l-22.917,76.554
								L287.659,148.286z M371.486,454.545l70.163-202.861c13.104-32.77,17.47-58.977,17.47-82.272c0-8.458-0.558-16.31-1.547-23.625
								c17.932,32.715,28.137,70.262,28.137,110.205C485.709,340.738,439.782,414.727,371.486,454.545z">	
						</path>	
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!-- About -->
	<div id="about-section" class="about section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="title">About me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3">
					<div class="about__pic-container">
						<img class="about__pic mb-4" src="<?php echo esc_url( VCNT_URI ); ?>/img/me.jpg" alt="Desarrollador WordPress - Victor Crespo">
					</div>
				</div>
				<div class="col-12 col-md-9 about__text-container">
					<p>
						My name is Víctor Hugo Escareño Crespo, and I'm a web developer specialized in WordPress. 
						I've been working with this content management system since 2019, improving existing 
						websites and building new ones from scratch, I've also developed custom themes and plugins.
					</p>
					<p>
						As a WordPress professional, my focus is on adapting the resources of this CMS to meet 
						very specific needs. From simple visual changes to integrating WordPress with third-party 
						platforms through APIs, everything is aimed at streamlining and improving the processes of 
						the companies and clients I work with. I help them achieve their business goals 
						while providing the necessary support every step of the way.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Services -->
	<div class="services section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="title">Services</h2>
					<div class="row">
						<div id="theme-icon-container" class="col-12 col-md-4">
							<svg id="theme-icon" class="home-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="9" r="2" stroke="#1C274C" stroke-width="1"/>
								<path d="M19.9999 17.6001L17.7764 15.599C16.7368 14.6634 15.1887 14.5702 14.0445 15.3744L13.7463 15.5839C12.9511 16.1428 11.8693 16.0491 11.1821 15.3618L6.89237 11.0721C6.03616 10.2159 4.66274 10.1702 3.75147 10.9675L2.28101 12.2542" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Custom Themes</h3>
							<p class="services__text">
								Creation of custom themes for WordPress, tailored to the specific needs of each client.
							</p>
						</div>
						<div id="plugin-icon-container" class="col-12 col-md-4 mt-5 mt-md-0">
							<svg id="plugin-icon" class="home-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 15.1082V20.1498C12 21.2635 11.0955 22.1875 10.0128 21.9673C5.44193 21.0381 2 16.9659 2 12.0832C2 10.2294 2.49614 8.49247 3.36182 7M16.3641 21.1581C19.7003 19.5239 22 16.0743 22 12.0832C22 6.51441 17.5228 2 12 2C10.1786 2 8.47087 2.49102 7 3.34895" stroke="#1C274C" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 11.8C9 11.3582 9.35817 11 9.8 11H14.2C14.6418 11 15 11.3582 15 11.8V12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12V11.8Z" stroke="#1C274C" stroke-width="1"/>
								<path d="M13.5 11V9" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M10.5 11V9" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Custom Plugins</h3>
							<p class="services__text">
								Creation of custom plugins for WordPress according to specific needs. Adaptation of existing plugin functionality.
							</p>
						</div>
						<div id="block-icon-container" class="col-12 col-md-4 mt-5 mt-md-0">
							<svg id="block-icon" class="home-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.5 9L15.6716 9.17157C17.0049 10.5049 17.6716 11.1716 17.6716 12C17.6716 12.8284 17.0049 13.4951 15.6716 14.8284L15.5 15" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M13.2942 7.17041L12.0001 12L10.706 16.8297" stroke="#1C274C" stroke-width="1.2" stroke-linecap="round"/>
								<path d="M8.49994 9L8.32837 9.17157C6.99504 10.5049 6.32837 11.1716 6.32837 12C6.32837 12.8284 6.99504 13.4951 8.32837 14.8284L8.49994 15" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Gutenberg Blocks</h3>
							<p class="services__text">
								Creation of custom blocks for the WordPress Gutenberg editor. Adaptation of existing block functionality.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="button testimonials__cta">
						Portfolio
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Social proof -->
	<div class="testimonials section">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="title">Testimonials</h2>
			</div>
		</div>
		<div class="row mb-3">
			<div id="testimonials-icon-container" class="col-12 col-md-2">
				<svg id="testimonials-icon" class="home-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 12.08L11 14L15 10" stroke="#1C274C" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M17 3.33782C15.5291 2.48697 13.8214 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22C17.5228 22 22 17.5228 22 12C22 10.1786 21.513 8.47087 20.6622 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
				</svg>
			</div>
			<div class="col-12 col-md-10 d-flex justify-content-center align-items-center">
				<p>
					Throughout my career as a WordPress developer, I've had the opportunity to work with a variety of clients 
					who have trusted my expertise to develop and improve their websites. Their feedback and experiences are a 
					testament to the quality and dedication I bring to every project. Below, I'm sharing some testimonials 
					from satisfied clients who saw their specific needs addressed with effective, personalized solutions, 
					and who received continuous support throughout the entire project.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<p class="testimonials__text">
					"I worked with Victor for more than 18 months. He is honest, flexible and hard working. He has good communication skills and always seeking to deliver according to expectations. Keep on going!"
				</p>
				<p class="testimonials__name">Gabriel Jenik</p>
			</div>
			<div class="col-12 col-md-4 mt-4 mt-md-0">
				<p class="testimonials__text">
					"I highly recommend Victor as a pivotal member of any team that values his key strengths, high-quality troubleshooting skills, as well as attention to detail and kind characteristics."
				</p>
				<p class="testimonials__name">Melina Von Hacht</p>
			</div>
			<div class="col-12 col-md-4 mt-4 mt-md-0">
				<p class="testimonials__text">
					"Great work from a great professional. He's transparent about his process and clearly shows progress. It's always a pleasure to find people this committed to each project. Highly recommended!"
				</p>
				<p class="testimonials__name">Carlos Esparragoza</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="https://www.linkedin.com/in/desarrollador-wordpress-freelance-victor-crespo/" target="blank" class="button testimonials__cta">
					More
				</a>
			</div>
		</div>
	</div>
	</div>
	<!-- Contact -->
	<div class="contact section">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="title">Contact</h2>
			</div>
		</div>
		<div class="row">
			<div id="contact-icon-container" class="col-12 col-md-2">
				<svg id="contact-icon" class="home-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 12.7215 17.8726 13.4133 17.6392 14.054C17.5551 14.285 17.4075 14.4861 17.2268 14.6527L17.1463 14.727C16.591 15.2392 15.7573 15.3049 15.1288 14.8858C14.6735 14.5823 14.4 14.0713 14.4 13.5241V12M14.4 12C14.4 13.3255 13.3255 14.4 12 14.4C10.6745 14.4 9.6 13.3255 9.6 12C9.6 10.6745 10.6745 9.6 12 9.6C13.3255 9.6 14.4 10.6745 14.4 12Z" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
					<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
				</svg>
			</div>
			<div class="col-12 col-md-10">
				<p>
					Is there a specific need that the available WordPress plugins and themes haven't been able to solve? Or maybe you have a particular improvement in mind that you'd like to implement on your website? I'm here to help you create custom and effective solutions that truly fit your needs.
					I'm available to answer any questions and explore how we can work together to achieve your goals. You can write to me directly at my email:
				</p>
				<img class="contact__mail" src="<?php echo esc_url( VCNT_URI ); ?>/img/cnt.png" alt="Desarrollador WordPress, Victor Crespo - mail">
			</div>
		</div>
	</div>
	</div>
<?php
