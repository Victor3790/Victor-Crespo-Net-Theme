<?php
/**
 * Dom content.
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Dom content class
 */
class Vcnt_Dom_Content {
	/**
	 * The html content, initialized in constructor.
	 *
	 * @var string
	 */
	private $xpath;

	/**
	 * The constructor
	 *
	 * @param string $content The html content.
	 */
	public function __construct( $content ) {
		$content = '<?xml encoding="UTF-8">' . $content;

		$dom = new DOMDocument();
		$dom->loadHTML( $content, LIBXML_NOERROR );
		$this->xpath = new DOMXPath( $dom );
	}

	/**
	 * Get an item text by css class.
	 *
	 * @param string $html_item The html item to look for.
	 * @param string $class_id The css class id to look for.
	 */
	public function get_item_text( $html_item, $class_id ) {

		$query = '//' . $html_item . "[contains(@class, '" . $class_id . "')]";

		$items = $this->xpath->query( $query );

		if ( 0 === $items->length ) {
			return '';
		}

		return $items->item( 0 )->textContent;
	}

	/**
	 * Get an image attributes by css class.
	 *
	 * @param string $class_id The css class id to look for.
	 */
	public function get_img_atts( $class_id ) {

		$atts = array(
			'src' => '',
			'alt' => '',
		);

		$query = "//figure[contains(@class, '" . $class_id . "')]//img";

		$items = $this->xpath->query( $query );

		if ( 0 === $items->length ) {
			return $atts;
		}

		$img_item    = $items->item( 0 );
		$atts['src'] = $img_item->getAttribute( 'src' );
		$atts['alt'] = $img_item->getAttribute( 'alt' );

		return $atts;
	}

	/**
	 * Get a button attributes by css class.
	 *
	 * @param string $class_id The css class id to look for.
	 */
	public function get_btn_atts( $class_id ) {

		$atts = array(
			'text' => '',
			'href' => '',
		);

		$query = "//div[contains(@class, '" . $class_id . "')]//a";

		$items = $this->xpath->query( $query );

		if ( 0 === $items->length ) {
			return $atts;
		}

		$anchor_item = $items->item( 0 );
		//phpcs:ignore
		$atts['text'] = $anchor_item->textContent;
		$atts['href'] = $anchor_item->getAttribute( 'href' );

		return $atts;
	}
}
