#  nechin/smart-hash
[![Source Code][badge-source]][source]
[![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![Build Status][badge-build]][build]
[![Total Downloads][badge-downloads]][downloads]

## About

Simple hash generator

From [Wikipedia](https://en.wikipedia.org/wiki/Hash_function):
> A hash function is any function that can be used to map data of arbitrary size to fixed-size values. The values returned by a hash function are called hash values, hash codes, digests, or simply hashes. The values are used to index a fixed-size table called a hash table. Use of a hash function to index a hash table is called hashing or scatter storage addressing.

## Installation

The preferred method of installation is via [Packagist][packagist] and [Composer][composer]. Run the following command to install the package and add it as a requirement to your project's `composer.json`:

```bash
composer require nechin/smart-hash
```

## Requirements

PHP 7.1.0

## Examples

```php
<?php
require 'vendor/autoload.php';

use Nechin\SmartHash\Hash;
Hash::generate('32', 'md5');
```

## Copyright and license

The nechin/smart-hash library is copyright © [Alexander Vitkalov](http://vitkalov.ru/) and licensed for use under the MIT License (MIT). Please see [LICENSE][] for more information.

[packagist]: https://packagist.org/packages/nechin/smart-hash
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/source-nechin/smart-hash-blue.svg?style=flat-square
[badge-release]: https://img.shields.io/packagist/v/nechin/smart-hash.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-build]: https://img.shields.io/travis/nechin/smart-hash/master.svg?style=flat-square
[badge-coverage]: https://img.shields.io/coveralls/nechin/smart-hash/master.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/nechin/smart-hash.svg?style=flat-square

[source]: https://github.com/nechin/smart-hash
[release]: https://packagist.org/packages/nechin/smart-hash
[license]: https://github.com/nechin/smart-hash/blob/master/LICENSE
[build]: https://travis-ci.org/nechin/smart-hash
[downloads]: https://packagist.org/packages/nechin/smart-hash
