# iban-generation

A small library for generating International Bankaccount Numbers (IBANs)

## Development status

This library is ready to use. The Iban generation should be fine, but there is no warranty. **Please use it at your own risk.**

---

## Features

* full support og german IBANs
* additional support for following countries
* simple to use object oriented api
* high test coverage
* DIC friendly

---

## Installation

To install `jschaedl/iban-generation` via [composer](https://getcomposer.org/) use

```sh
$ composer require jschaedl/iban-generation
```

You can see this library on [Packagist](https://packagist.org/packages/jschaedl/iban-generation).

---

## Iban Generation

```php
<?php

...

```

---
 
## How to contribute
If you want to fix some bugs or want to enhance some functionality, please fork the master branch and create your own development branch. 
Then fix the bug you found or add your enhancements and make a pull request. Please commit your changes in tiny steps and add a detailed description on every commit. 

### Unit Testing

All pull requests must be accompanied by passing unit tests. This repository uses phpunit and Composer. 
You must run `composer --dev install` to install this package's dependencies. You can run the tests via:

```sh
$ vendor/bin/phpunit
```

---
   
## Author

[Jan Schädlich](https://www.linkedin.com/in/janschaedlich)

[Contributors](https://github.com/jschaedl/iban-validation/graphs/contributors)

## License

MIT License

---

## Release Status

2018-..-..: [Version 1.0](https://github.com/jschaedl/iban-generation/releases/tag/v1.0) has been released.
