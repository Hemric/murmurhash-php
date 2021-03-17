# MurmurHash3

PHP Implementation of MurmurHash3 (forked from: https://github.com/lastguest/murmurhash-php)

More information about these algorithms can be found at:

* [MurmurHash Homepage](http://sites.google.com/site/murmurhash/)
* [Wikipedia Entry on MurmurHash](http://en.wikipedia.org/wiki/MurmurHash) 

Porting of the MurmurHash3 JavaScript version created by Gary Court (https://github.com/garycourt/murmurhash-js)

## Installation

Use [composer](https://getcomposer.org/download/) :

```bash
composer require lastguest/murmurhash
```

## Usage

You can retrieve an hash via `hash3` static method of class `Murmur`

```php
<?php
use hemric\Murmur;

echo Murmur::hash3("Hello World");
// cnd0ue
```

You can pass a precise seed positive integer as second parameter

```php
<?php
use hemric\Murmur;

echo Murmur::hash3("Hello World", 1234567);
// qtq2u
```

If you need the integer hash, use the `hash3_int` method

```php
<?php
use hemric\Murmur;

echo Murmur::hash3_int("Hello World");
// 427197390
```