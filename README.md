#  nechin/smart-hash
[![Source Code][badge-source]][source]
[![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![Total Downloads][badge-downloads]][downloads]

## About

A simple hash generator that makes it easy to get a hash for any text.

From [Wikipedia](https://en.wikipedia.org/wiki/Hash_function):
> A hash function is any function that can be used to map data of arbitrary size to fixed-size values. The values returned by a hash function are called hash values, hash codes, digests, or simply hashes. The values are used to index a fixed-size table called a hash table. Use of a hash function to index a hash table is called hashing or scatter storage addressing.

## Installation

The preferred method of installation is via [Packagist][packagist] and [Composer][composer]. Run the following command to install the package and add it as a requirement to your project's `composer.json`:

```bash
composer require nechin/smart-hash
```

## Requirements

PHP 5.4.0

## Examples

If no length is specified, the _ripemd128_ algorithm is used, which will generate a string of 32 hexadecimal digits.

The following hash lengths are available: 8, 16, 32, 40, 48, 56, 64, 80, 96, 128. For each length is used its own optimal algorithm.

It is possible to specify the desired algorithm as the third parameter. Then the second parameter should be false.

```php
<?php
use Nechin\SmartHash\SmartHash;

SmartHash::hash('Hello Word');  // 39a70319440d506d758d03fee8b94a56
SmartHash::hash('Hello Word', 64);  // 4bc4e29b1a44673affb69be5f72376a17d95e7976d117fd7b8a7c514420fb2a8
SmartHash::hash('Hello Word', false, 'sha384'); // 1e40aa579d1c826d3c48370084698e9f0da212aa615791ed9f851673de7a959124627445ef061bd93edd5dd94ece1b54
```

## Copyright and license

The nechin/smart-hash library is copyright © [Alexander Vitkalov](http://vitkalov.ru/) and licensed for use under the MIT License (MIT). Please see [LICENSE][license] for more information.

[packagist]: https://packagist.org/packages/nechin/smart-hash
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/source-nechin/smart-hash-blue.svg?style=flat-square
[badge-release]: https://img.shields.io/packagist/v/nechin/smart-hash.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/nechin/smart-hash.svg?style=flat-square

[source]: https://github.com/nechin/smart-hash
[release]: https://packagist.org/packages/nechin/smart-hash
[license]: https://github.com/nechin/smart-hash/blob/master/LICENSE
[downloads]: https://packagist.org/packages/nechin/smart-hash
