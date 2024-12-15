<?php
/**
 * Core MDash Functions
 *
 * Functions for handling empty values using mdash HTML entity.
 * Provides base functionality for string, number and array handling.
 *
 * @package       ArrayPress/WP-MDash
 * @copyright     Copyright 2024, ArrayPress Limited
 * @license       GPL-2.0-or-later
 * @version       1.0.0
 * @author        David Sherlock
 */

declare( strict_types=1 );

if ( ! function_exists( 'mdash' ) ) {
	/**
	 * Return an mdash if value is empty, otherwise return the value.
	 *
	 * @param mixed $value Optional. Value to check.
	 *
	 * @return string The value or mdash if empty.
	 */
	function mdash( $value = null ): string {
		if ( $value === null || $value === '' || $value === false ) {
			return '&mdash;';
		}

		return (string) $value;
	}
}

if ( ! function_exists( 'mdash_e' ) ) {
	/**
	 * Echo an mdash if value is empty, otherwise echo the value.
	 *
	 * @param mixed $value Optional. Value to check.
	 *
	 * @return void
	 */
	function mdash_e( $value = null ): void {
		echo mdash( $value );
	}
}

if ( ! function_exists( 'mdash_array' ) ) {
	/**
	 * Check array value by key and return mdash if empty.
	 *
	 * @param array  $array Array to check.
	 * @param string $key   Key to look for.
	 *
	 * @return string The value or mdash if empty/not found.
	 */
	function mdash_array( array $array, string $key ): string {
		return mdash( $array[ $key ] ?? null );
	}
}

if ( ! function_exists( 'mdash_array_e' ) ) {
	/**
	 * Echo array value by key or mdash if empty.
	 *
	 * @param array  $array Array to check.
	 * @param string $key   Key to look for.
	 *
	 * @return void
	 */
	function mdash_array_e( array $array, string $key ): void {
		echo mdash_array( $array, $key );
	}
}

if ( ! function_exists( 'mdash_number' ) ) {
	/**
	 * Return an mdash if number is empty or zero, otherwise return the formatted number.
	 *
	 * @param int|float|null $number Optional. Number to check.
	 * @param bool           $format Whether to format the number. Default true.
	 *
	 * @return string The formatted number or mdash.
	 */
	function mdash_number( $number = null, bool $format = true ): string {
		if ( $number === null || $number === '' || $number === 0 ) {
			return '&mdash;';
		}

		return $format ? number_format_i18n( $number ) : (string) $number;
	}
}

if ( ! function_exists( 'mdash_number_e' ) ) {
	/**
	 * Echo a formatted number or mdash if empty/zero.
	 *
	 * @param int|float|null $number Optional. Number to check.
	 * @param bool           $format Whether to format the number. Default true.
	 *
	 * @return void
	 */
	function mdash_number_e( $number = null, bool $format = true ): void {
		echo mdash_number( $number, $format );
	}
}