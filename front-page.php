<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

get_header();
?>
	<!-- Hero -->
	<div class="hero">
		<div class="container hero__container">
			<div class="row hero__row">
				<div class="col-12 col-md-6 order-2 order-md-1 hero__text-container mb-5 mb-md-0">
					<h1 class="hero__title mb-0">Desarrollador WordPress</h1>
					<h4 class="hero__subtitle my-4 my-md-3">Victor Crespo</h4>
					<p class="mb-4 mb-md-3">
						Si bien en internet existen una gran cantidad plugins y temas para WordPress,
						hay necesidades muy especificas que estos no logran cubrir
						o que no lo hacen de la mejor manera. A lo largo de cuatro años he desarrollado
						soluciones para cubrir este tipo de necesidades. 
						Conoce más sobre mi experiencia profesional.
					</p>
					<a href="#about-section" class="button hero__cta">
						Saber más
					</a>
				</div>
				<div class="col-12 col-md-6 order-1 order-md-2 hero__pic-container">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="hero__pic" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
						<g id="5151e0c8492e5103c096af88a51f5fb6">	
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
						</g>
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
					<h2 class="title">Sobre mí</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3">
					<img class="about__pic mb-4" src="<?php echo esc_url( VCNT_URI ); ?>/img/me.jpg">
				</div>
				<div class="col-12 col-md-9 about__text-container">
					<p>
						Mi nombre es Víctor Hugo Escareño Crespo, soy <b>desarrollador web especializado en WordPress</b>. 
						Llevo poco más de cuatro años trabajando con este administrador de contenido,
						realizando mejoras a sitios ya existentes y desarrollando webs desde cero así como temas y plugins
						personalizados.
					</p>
					<p>
						Como profesional de WordPress, mi enfoque está puesto en adaptar los recursos de este CMS 
						para dar soluciones a necesidades muy especificas. Desde 
						simples cambios visuales, hasta conexiones entre WordPress y plataformas de terceros 
						por medio de APIS. Todo con la finalidad de eficientar y mejorar los procesos de las empresas y clientes con 
						los que trabajo, ayudandoles a alcanzar sus objetivos de negocio.
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
					<h2 class="title">Servicios</h2>
					<div class="row">
						<div class="col-12 col-md-4">
							<svg class="services__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="9" r="2" stroke="#1C274C" stroke-width="1"/>
								<path d="M19.9999 17.6001L17.7764 15.599C16.7368 14.6634 15.1887 14.5702 14.0445 15.3744L13.7463 15.5839C12.9511 16.1428 11.8693 16.0491 11.1821 15.3618L6.89237 11.0721C6.03616 10.2159 4.66274 10.1702 3.75147 10.9675L2.28101 12.2542" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Temas personalizados</h3>
							<p class="services__text">
							Creación de temas para WordPress desde cero. Modificación de temas hijo (estilos y funcionalidad según se necesite).
							</p>
						</div>
						<div class="col-12 col-md-4 mt-5 mt-md-0">
							<svg class="services__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 15.1082V20.1498C12 21.2635 11.0955 22.1875 10.0128 21.9673C5.44193 21.0381 2 16.9659 2 12.0832C2 10.2294 2.49614 8.49247 3.36182 7M16.3641 21.1581C19.7003 19.5239 22 16.0743 22 12.0832C22 6.51441 17.5228 2 12 2C10.1786 2 8.47087 2.49102 7 3.34895" stroke="#1C274C" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 11.8C9 11.3582 9.35817 11 9.8 11H14.2C14.6418 11 15 11.3582 15 11.8V12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12V11.8Z" stroke="#1C274C" stroke-width="1"/>
								<path d="M13.5 11V9" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M10.5 11V9" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Plugins a medida</h3>
							<p class="services__text">
							Creación de plugins para WordPress según necesidades específicas. Adaptación de funcionalidad de plugins existentes.
							</p>
						</div>
						<div class="col-12 col-md-4 mt-5 mt-md-0">
							<svg class="services__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.5 9L15.6716 9.17157C17.0049 10.5049 17.6716 11.1716 17.6716 12C17.6716 12.8284 17.0049 13.4951 15.6716 14.8284L15.5 15" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M13.2942 7.17041L12.0001 12L10.706 16.8297" stroke="#1C274C" stroke-width="1.2" stroke-linecap="round"/>
								<path d="M8.49994 9L8.32837 9.17157C6.99504 10.5049 6.32837 11.1716 6.32837 12C6.32837 12.8284 6.99504 13.4951 8.32837 14.8284L8.49994 15" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
								<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1" stroke-linecap="round"/>
							</svg>
							<h3 class="mb-2 services__title">Bloques Gutenberg</h3>
							<p class="services__text">
							Creación de bloques de Gutenberg para WordPress, ideal si se necesita modificar aspectos de la web de manera constante
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Social proof -->
	<div class="testimonials section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="title">Testimonios</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-4">
					<p>
						"Víctor ha sido una persona muy atenta y paciente en todo momento. Además se ha preocupado por resolverme todas las dudas y solucionar los imprevistos que han surgido durante todo el proyecto. Lo recomiendo 100%"
					</p>
					<p class="testimonials__name">José Pozo</p>
				</div>
				<div class="col-12 col-md-4 mt-4 mt-md-0">
					<p>
						"Víctor es un desarrollador con gran capacidad para resolver los detalles que se presentan, cuenta con la paciencia y disposición para cumplir con todos los objetivos del proyecto. Es un placer conocer profesionales como Víctor."
					</p>
					<p class="testimonials__name">Luis Llamas</p>
				</div>
				<div class="col-12 col-md-4 mt-4 mt-md-0">
					<p>
						"Gran trabajo de un gran profesional, transparenta su trabajo y muestra los avances claramente. Siempre es un placer encontrar personas asi de comprometidas con cada proyecto. Super recomendable!"
					</p>
					<p class="testimonials__name">Carlos Esparragoza</p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="https://www.workana.com/freelancer/3dc268b9393c6e168b4d194e147c4a46" target="blank" class="button testimonials__cta">
						Más testimonios
					</a>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
