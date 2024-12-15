# WordPress MDash

A collection of WordPress functions for handling empty values consistently using mdash and other semantic formatting patterns.

## Description

This package provides a set of utility functions for WordPress development that handle empty, null, or missing values in a consistent and semantic way. The primary approach uses the HTML mdash entity (`&mdash;`) as a visual indicator for empty values, along with other common formatting patterns.

## Features

- Empty value handling with mdash
- Date and time formatting with fallbacks
- Array list formatting with natural language support
- Translation-safe number formatting
- Common display patterns (Yes/No, None)
- Type-safe implementations
- WordPress-style echo functions

## Installation

Install via Composer:

```bash
composer require arraypress/wp-mdash
```

## Usage

### Basic Empty Value Handling

```php
// Return empty value handling
$value = mdash( $variable );              // Returns &mdash; if empty
$number = mdash_number( 0 );              // Returns &mdash; for zero/empty
$item = mdash_array( $array, 'key' );     // Returns &mdash; if key not found

// Direct echo empty value handling
mdash_e( $variable );                     // Echoes &mdash; if empty
mdash_number_e( 0 );                      // Echoes &mdash; for zero/empty
mdash_array_e( $array, 'key' );           // Echoes &mdash; if key not found
```

### Date Formatting

```php
// Return date handling
$date = mdash_date( '2024-01-01' );       // Returns formatted date or mdash
$ago = time_ago( '2024-01-01' );          // Returns "X time ago" or mdash

// Echo date handling
mdash_date_e( '2024-01-01' );             // Echoes formatted date or mdash
time_ago_e( '2024-01-01' );               // Echoes "X time ago" or mdash
```

### Array Formatting

```php
$items = ['apple', 'banana', 'orange'];

// Return array formatting
$list = mdash_list( $items );                     // Returns "apple, banana, orange"
$natural = mdash_list( $items, ', ', ' and ' );   // Returns "apple, banana and orange"
$empty = mdash_list( [] );                        // Returns &mdash;

// Echo array formatting
mdash_list_e( $items );                          // Echoes "apple, banana, orange"
mdash_list_e( $items, ', ', ' and ' );          // Echoes "apple, banana and orange"
mdash_list_e( [] );                             // Echoes &mdash;
```

### Display Helpers

```php
// Return display patterns
$yes = bool_yn( true );                   // Returns localized "Yes"
$no = bool_yn( false );                   // Returns localized "No"
$empty = none( $value );                  // Returns localized "None" if empty

// Echo display patterns
bool_yn_e( true );                        // Echoes localized "Yes"
bool_yn_e( false );                       // Echoes localized "No"
none_e( $value );                         // Echoes localized "None" if empty
```

### Translation Helper

```php
// HTML-escaped translated string with placeholders
echo esc_html_f( 'Hello %s', 'textdomain', 'World' );
```

## Requirements

- PHP 7.4 or higher
- WordPress 5.0 or higher

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the GPL-2.0-or-later license.

## Support

For support, please use the [GitHub issue tracker](https://github.com/arraypress/wp-mdash/issues)