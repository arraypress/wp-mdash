<?php
/**
 * Translation Formatting Helpers
 *
 * Helper functions for formatting translated strings with proper escaping
 * and placeholder support.
 *
 * @package       ArrayPress/WP-MDash
 * @copyright     Copyright 2024, ArrayPress Limited
 * @license       GPL-2.0-or-later
 * @version       1.0.0
 * @author        David Sherlock
 */

declare( strict_types=1 );

if ( ! function_exists( 'esc_html_f' ) ) {
	/**
	 * HTML escapes a translated string with sprintf formatting.
	 *
	 * @param string $text    Text to translate with placeholders (must be string literal).
	 * @param string $domain  Text domain to use for translation.
	 * @param mixed  ...$args Values to replace placeholders.
	 *
	 * @return string The translated, escaped, and formatted string.
	 */
	function esc_html_f( string $text, string $domain, ...$args ): string {
		return sprintf( esc_html__( $text, $domain ), ...$args );
	}
}