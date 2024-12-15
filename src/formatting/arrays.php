<?php
/**
 * Array Formatting Functions
 *
 * Functions for formatting arrays into readable lists with proper empty value handling.
 * Supports custom separators and natural language formatting.
 *
 * @package       ArrayPress/WP-MDash
 * @copyright     Copyright 2024, ArrayPress Limited
 * @license       GPL-2.0-or-later
 * @version       1.0.0
 * @author        David Sherlock
 */

declare( strict_types=1 );

if ( ! function_exists( 'mdash_list' ) ) {
	/**
	 * Return mdash if array is empty, otherwise return imploded list.
	 *
	 * @param array       $array     Array to implode.
	 * @param string      $glue      Glue string for implode. Default ', '.
	 * @param string|null $last_glue Optional last glue for natural language lists.
	 *
	 * @return string Imploded list or mdash.
	 */
	function mdash_list( array $array, string $glue = ', ', ?string $last_glue = null ): string {
		if ( empty( $array ) ) {
			return '&mdash;';
		}

		if ( $last_glue !== null ) {
			$last = array_pop( $array );
			if ( $array ) {
				return implode( $glue, $array ) . $last_glue . $last;
			}

			return $last;
		}

		return implode( $glue, $array );
	}
}

if ( ! function_exists( 'mdash_list_e' ) ) {
	/**
	 * Echo mdash if array is empty, otherwise echo imploded list.
	 *
	 * @param array       $array     Array to implode.
	 * @param string      $glue      Glue string for implode. Default ', '.
	 * @param string|null $last_glue Optional last glue for natural language lists.
	 *
	 * @return void
	 */
	function mdash_list_e( array $array, string $glue = ', ', ?string $last_glue = null ): void {
		echo mdash_list( $array, $glue, $last_glue );
	}
}