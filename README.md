# PohodaResponseParser

[![Build Status][ico-build]][link-build]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
[![Latest Version on Packagist][ico-version]][link-packagist]

Library for parsing Pohoda import response XML.
## Install via Composer

``` bash
composer require Hexako/PohodaResponseParser
```

## Usage

``` php
$parser = new PohodaResponseParser('pathToFile');
$parser->isOk();
```

## Rules for contributing

- **1 PR per feature**
- PR with tests are more likely to be merged 
- **tests and coding standard must pass**

```bash
vendor/bin/phpcs -p --standard=PSR2 src tests
vendor/bin/phpunit
```

**Happy coding**!

[ico-version]: https://img.shields.io/packagist/v/jakubdusek/pohoda-response-parser.svg?style=flat-square
[ico-build]: https://scrutinizer-ci.com/g/jakubdusek/PohodaResponseParser/badges/build.png?b=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jakubdusek/PohodaResponseParser.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jakubdusek/PohodaResponseParser.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jakubdusek/pohoda-response-parser.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jakubdusek/pohoda-response-parser
[link-build]: https://scrutinizer-ci.com/g/jakubdusek/PohodaResponseParser/build-status/master
[link-scrutinizer]: https://scrutinizer-ci.com/g/jakubdusek/PohodaResponseParser/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jakubdusek/PohodaResponseParser
[link-downloads]: https://packagist.org/packages/jakubdusek/pohoda-response-parser
