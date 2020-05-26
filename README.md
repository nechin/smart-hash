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

SmartHash::hash('Hello World');  // 2d02b563447f954eafdc4824a190ddcc
SmartHash::hash('Hello World', 64);  // 32b7b7d2408f9389d77cc00aff3c1529504508e86cdbc78a95c469fc68f80543
SmartHash::hash('Hello World', false, 'sha384'); // 99514329186b2f6ae4a1329e7ee6c610a729636335174ac6b740f9028396fcc803d0e93863a7c3d90f86beee782f4f3f
```

## Copyright and license

The nechin/smart-hash library is copyright © [Alexander Vitkalov](http://vitkalov.ru/) and licensed for use under the MIT License (MIT). Please see [LICENSE][license] for more information.

[packagist]: https://packagist.org/packages/nechin/smart-hash
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/source-nechin/smart--hash-blue?style=flat-square
[badge-release]: https://img.shields.io/github/v/release/nechin/smart-hash?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/nechin/smart-hash?style=flat-square

[source]: https://github.com/nechin/smart-hash
[release]: https://packagist.org/packages/nechin/smart-hash
[license]: https://github.com/nechin/smart-hash/blob/master/LICENSE
[downloads]: https://packagist.org/packages/nechin/smart-hash
