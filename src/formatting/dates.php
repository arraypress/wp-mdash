<?php
/**
 * Date Formatting Functions
 *
 * Date and time formatting functions with mdash fallbacks for empty values.
 * Includes human-readable time differences and standard date formatting.
 *
 * @package       ArrayPress/WP-MDash
 * @copyright     Copyright 2024, ArrayPress Limited
 * @license       GPL-2.0-or-later
 * @version       1.0.0
 * @author        David Sherlock
 */

declare( strict_types=1 );

if ( ! function_exists( 'mdash_date' ) ) {
	/**
	 * Display formatted date or mdash if empty.
	 *
	 * @param string|null $date   Date string.
	 * @param string      $format Date format. Default WordPress date format.
	 *
	 * @return string Formatted date or mdash.
	 */
	function mdash_date( ?string $date, string $format = '' ): string {
		if ( empty( $date ) ) {
			return '&mdash;';
		}
		if ( empty( $format ) ) {
			$format = get_option( 'date_format' );
		}

		return date_i18n( $format, strtotime( $date ) );
	}
}

if ( ! function_exists( 'mdash_date_e' ) ) {
	/**
	 * Echo formatted date or mdash if empty.
	 *
	 * @param string|null $date   Date string.
	 * @param string      $format Date format. Default WordPress date format.
	 *
	 * @return void
	 */
	function mdash_date_e( ?string $date, string $format = '' ): void {
		echo mdash_date( $date, $format );
	}
}

if ( ! function_exists( 'time_ago' ) ) {
	/**
	 * Convert timestamp to "time ago" format.
	 *
	 * @param string|int $timestamp Timestamp or date string.
	 *
	 * @return string Human-readable time difference.
	 */
	function time_ago( $timestamp ): string {
		if ( empty( $timestamp ) ) {
			return '&mdash;';
		}
		if ( ! is_numeric( $timestamp ) ) {
			$timestamp = strtotime( $timestamp );
		}

		return sprintf(
			__( '%s ago', 'arraypress' ),
			human_time_diff( $timestamp, current_time( 'timestamp' ) )
		);
	}
}

if ( ! function_exists( 'time_ago_e' ) ) {
	/**
	 * Echo timestamp in "time ago" format.
	 *
	 * @param string|int $timestamp Timestamp or date string.
	 *
	 * @return void
	 */
	function time_ago_e( $timestamp ): void {
		echo time_ago( $timestamp );
	}
}