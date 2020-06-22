<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * hooks for adding google fonts
 */

class Sassico_Unyson_Google_Fonts {

	static private $data = array(
		'subset' => array(),
		'family' => array(),
	);

	public static function add_typography_v2( $value ) {
		$json_decode = json_decode($value, true);
		if ( in_array( isset( $json_decode[ 'family' ] ), array( true, 'true' ), true ) ) {
			self::$data[ 'family' ][ $json_decode[ 'family' ] ][ 'variants' ][ (string) $json_decode[ 'variation' ] ] = true;
			self::$data[ 'subset' ][ $json_decode[ 'subset' ] ] = true;
		}
	}

	public static function clear() {
		self::$data = array();
	}

	public static function generate_url() {
		/**
		 * Example:
		 *
		 * <link href="
		 * https://fonts.googleapis.com/css?
		 * family={Family}|{Family}:{variant},{variant}
		 * &amp;
		 * subset=cyrillic-ext,greek,vietnamese
		 * " rel="stylesheet">
		 */

		if ( empty( self::$data[ 'family' ] ) ) {
			return false;
		}

		$query = array(
			'family' => array(),
			'subset' => implode( ',', array_keys( self::$data[ 'subset' ] ) ),
		);

		foreach ( self::$data[ 'family' ] as $family => $family_data ) {
			if ( !empty( $family ) ) {
				$family_data[ 'variants' ][900] = $family_data[ 'variants' ][700] = $family_data[ 'variants' ][400] = 1;
				$query[ 'family' ][] = $family . ':' . implode( ',', array_keys( $family_data[ 'variants' ] ) );
			}
		}
		$query[ 'family' ] = implode( '|', $query[ 'family' ] );
		return add_query_arg( 'family', urlencode( $query[ 'family' ] ), "https://fonts.googleapis.com/css" );

	}

	public static function output_url() {
		if ( $url = self::generate_url() ):
			?><link href="<?php echo esc_attr( $url ) ?>" rel="stylesheet"><?php
		endif;
	}

}
add_action( 'wp_enqueue_scripts', array( 'Sassico_Unyson_Google_Fonts', 'output_url' ), 9999 );
