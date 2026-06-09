<?php
/**
 * Plugin Name: Jagad Surya Energi – SEO Schema
 * Description: LocalBusiness, Service, FAQ, dan Breadcrumb schema untuk jagadsuryaenergi.com
 * Version:     1.0.0
 */
defined( 'ABSPATH' ) || exit;

/* ---------------------------------------------------------------
 * 1. LOCALBUSINESS SCHEMA — muncul di semua halaman
 * --------------------------------------------------------------- */
add_action( 'wp_head', 'jagad_localbusiness_schema' );
function jagad_localbusiness_schema() {
	$schema = [
		'@context'        => 'https://schema.org',
		'@type'           => [ 'LocalBusiness', 'ElectricalContractor' ],
		'@id'             => 'https://jagadsuryaenergi.com/#business',
		'name'            => 'Jagad Surya Energi',
		'url'             => 'https://jagadsuryaenergi.com',
		'logo'            => [
			'@type' => 'ImageObject',
			'url'   => 'https://jagadsuryaenergi.com/wp-content/uploads/logo.png',
		],
		'image'           => 'https://jagadsuryaenergi.com/wp-content/uploads/logo.png',
		'description'     => 'Spesialis pemasangan panel surya (PLTS) rumahan di Jabodetabek dan Bekasi. Hemat tagihan listrik hingga 80% dengan solusi energi surya terpercaya.',
		'telephone'       => '+62-xxx-xxxx-xxxx',
		'email'           => 'info@jagadsuryaenergi.com',
		'address'         => [
			'@type'           => 'PostalAddress',
			'streetAddress'   => '',
			'addressLocality' => 'Bekasi',
			'addressRegion'   => 'Jawa Barat',
			'postalCode'      => '',
			'addressCountry'  => 'ID',
		],
		'geo'             => [
			'@type'     => 'GeoCoordinates',
			'latitude'  => '-6.2383',
			'longitude' => '106.9756',
		],
		'areaServed'      => [
			[ '@type' => 'City', 'name' => 'Bekasi' ],
			[ '@type' => 'City', 'name' => 'Jakarta' ],
			[ '@type' => 'City', 'name' => 'Bogor' ],
			[ '@type' => 'City', 'name' => 'Depok' ],
			[ '@type' => 'City', 'name' => 'Tangerang' ],
		],
		'priceRange'      => 'Rp15.000.000 – Rp80.000.000',
		'currenciesAccepted' => 'IDR',
		'paymentAccepted' => 'Cash, Transfer Bank, KPR',
		'openingHoursSpecification' => [
			[
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ],
				'opens'     => '08:00',
				'closes'    => '17:00',
			],
			[
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => 'Saturday',
				'opens'     => '08:00',
				'closes'    => '14:00',
			],
		],
		'sameAs'          => [
			'https://www.instagram.com/jagadsuryaenergi',
		],
	];

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}

/* ---------------------------------------------------------------
 * 2. SERVICE SCHEMA — muncul di halaman layanan / page tertentu
 * --------------------------------------------------------------- */
add_action( 'wp_head', 'jagad_service_schema' );
function jagad_service_schema() {
	if ( ! is_page() && ! is_singular( 'post' ) ) {
		return;
	}

	$services = [
		[
			'name'        => 'Pemasangan Panel Surya Rumahan',
			'description' => 'Instalasi PLTS on-grid dan off-grid untuk rumah tinggal di Jabodetabek. Hemat tagihan listrik PLN hingga 80% per bulan.',
			'url'         => 'https://jagadsuryaenergi.com/layanan/panel-surya-rumahan/',
		],
		[
			'name'        => 'Survei dan Konsultasi Panel Surya Gratis',
			'description' => 'Survei lokasi gratis dan konsultasi kapasitas PLTS yang tepat sesuai kebutuhan daya dan anggaran.',
			'url'         => 'https://jagadsuryaenergi.com/layanan/konsultasi-gratis/',
		],
		[
			'name'        => 'Servis dan Perawatan Panel Surya',
			'description' => 'Layanan perawatan, pembersihan, dan perbaikan sistem panel surya residensial.',
			'url'         => 'https://jagadsuryaenergi.com/layanan/servis-panel-surya/',
		],
	];

	foreach ( $services as $service ) {
		$schema = [
			'@context'        => 'https://schema.org',
			'@type'           => 'Service',
			'serviceType'     => 'Solar Panel Installation',
			'name'            => $service['name'],
			'description'     => $service['description'],
			'url'             => $service['url'],
			'provider'        => [ '@id' => 'https://jagadsuryaenergi.com/#business' ],
			'areaServed'      => [
				[ '@type' => 'City', 'name' => 'Bekasi' ],
				[ '@type' => 'City', 'name' => 'Jakarta' ],
				[ '@type' => 'City', 'name' => 'Bogor' ],
				[ '@type' => 'City', 'name' => 'Depok' ],
				[ '@type' => 'City', 'name' => 'Tangerang' ],
			],
			'offers'          => [
				'@type'         => 'Offer',
				'priceCurrency' => 'IDR',
				'availability'  => 'https://schema.org/InStock',
			],
		];

		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}

/* ---------------------------------------------------------------
 * 3. FAQ SCHEMA — deteksi blok FAQ Yoast atau shortcode khusus
 * --------------------------------------------------------------- */
add_action( 'wp_head', 'jagad_faq_schema' );
function jagad_faq_schema() {
	if ( ! is_singular() ) {
		return;
	}

	$post    = get_post();
	$content = $post ? $post->post_content : '';

	// Deteksi blok FAQ Yoast (wp:yoast/faq-block)
	if ( ! has_block( 'yoast/faq-block', $post ) ) {
		return;
	}

	// Parsing pertanyaan dari blok Yoast FAQ
	$blocks = parse_blocks( $content );
	$qa     = [];

	foreach ( $blocks as $block ) {
		if ( 'yoast/faq-block' !== $block['blockName'] ) {
			continue;
		}
		if ( empty( $block['attrs']['questions'] ) ) {
			continue;
		}
		foreach ( $block['attrs']['questions'] as $q ) {
			if ( ! empty( $q['jsonQuestion'] ) && ! empty( $q['jsonAnswer'] ) ) {
				$qa[] = [
					'@type'          => 'Question',
					'name'           => wp_strip_all_tags( $q['jsonQuestion'] ),
					'acceptedAnswer' => [
						'@type' => 'Answer',
						'text'  => wp_strip_all_tags( $q['jsonAnswer'] ),
					],
				];
			}
		}
	}

	if ( empty( $qa ) ) {
		return;
	}

	$schema = [
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => $qa,
	];

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}

/* ---------------------------------------------------------------
 * 4. BREADCRUMB SCHEMA — menggunakan data breadcrumb Yoast
 * --------------------------------------------------------------- */
add_action( 'wp_head', 'jagad_breadcrumb_schema' );
function jagad_breadcrumb_schema() {
	if ( is_front_page() || ! function_exists( 'yoast_breadcrumb' ) ) {
		return;
	}

	$crumbs = ( class_exists( 'WPSEO_Breadcrumbs' ) )
		? \Yoast\WP\SEO\Context\Meta_Tags_Context::get_breadcrumbs()
		: null;

	// Fallback manual breadcrumb sederhana
	$items   = [];
	$items[] = [
		'@type'    => 'ListItem',
		'position' => 1,
		'name'     => 'Beranda',
		'item'     => home_url( '/' ),
	];

	if ( is_singular() ) {
		$post = get_post();
		if ( $post ) {
			$items[] = [
				'@type'    => 'ListItem',
				'position' => 2,
				'name'     => get_the_title( $post ),
				'item'     => get_permalink( $post ),
			];
		}
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$term    = get_queried_object();
		$items[] = [
			'@type'    => 'ListItem',
			'position' => 2,
			'name'     => $term->name ?? '',
			'item'     => get_term_link( $term ),
		];
	}

	if ( count( $items ) < 2 ) {
		return;
	}

	$schema = [
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $items,
	];

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
