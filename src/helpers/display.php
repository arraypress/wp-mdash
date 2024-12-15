<?php
/**
 * Display Helper Functions
 *
 * General display helpers for common patterns like Yes/No values
 * and "None" placeholders with translation support.
 *
 * @package       ArrayPress/WP-MDash
 * @copyright     Copyright 2024, ArrayPress Limited
 * @license       GPL-2.0-or-later
 * @version       1.0.0
 * @author        David Sherlock
 */

declare( strict_types=1 );

if ( ! function_exists( 'bool_yn' ) ) {
	/**
	 * Convert boolean to Yes/No (translatable).
	 *
	 * @param bool|null $value Value to check.
	 *
	 * @return string Translated 'Yes' or 'No'.
	 */
	function bool_yn( ?bool $value ): string {
		return $value ? __( 'Yes', 'arraypress' ) : __( 'No', 'arraypress' );
	}
}

if ( ! function_exists( 'bool_yn_e' ) ) {
	/**
	 * Echo boolean as Yes/No (translatable).
	 *
	 * @param bool|null $value Value to check.
	 *
	 * @return void
	 */
	function bool_yn_e( ?bool $value ): void {
		echo bool_yn( $value );
	}
}

if ( ! function_exists( 'none' ) ) {
	/**
	 * Return 'None' if value is empty (translatable).
	 *
	 * @param mixed $value Optional. Value to check.
	 *
	 * @return string The value or translated 'None' if empty.
	 */
	function none( $value = null ): string {
		if ( $value === null || $value === '' || $value === false ) {
			return __( 'None', 'arraypress' );
		}

		return (string) $value;
	}
}

if ( ! function_exists( 'none_e' ) ) {
	/**
	 * Echo 'None' if value is empty (translatable).
	 *
	 * @param mixed $value Optional. Value to check.
	 *
	 * @return void
	 */
	function none_e( $value = null ): void {
		echo none( $value );
	}
}