[![PHP Censor](http://ci.php-censor.info/build-status/image/3?branch=master&label=PHPCensor&style=flat-square)](http://ci.php-censor.info/build-status/view/3?branch=master)
[![Travis CI](https://api.travis-ci.org/OrbitTechnology/phpapplicationsample.svg?branch=master)](https://api.travis-ci.org/OrbitTechnology/phpapplicationsample.svg?branch=master)
[![Latest Version](https://img.shields.io/packagist/v/corpsee/php-application-sample.svg?label=Version&style=flat-square)](https://packagist.org/packages/corpsee/php-application-sample)
[![Total downloads](https://img.shields.io/packagist/dt/corpsee/php-application-sample.svg?label=Downloads&style=flat-square)](https://packagist.org/packages/corpsee/php-application-sample)
[![License](https://img.shields.io/packagist/l/corpsee/php-application-sample.svg?label=License&style=flat-square)](https://packagist.org/packages/corpsee/php-application-sample)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/31e77222-8786-446a-adee-209163ab1b37.svg?label=Insight&style=flat-square)](https://insight.sensiolabs.com/projects/31e77222-8786-446a-adee-209163ab1b37)

PHP application sample
======================

Sample of PHP application/library compliant with PSR-1, PSR-2, PSR-4 and Composer for PHP 5.4+.

Installation
------------

You can install PHP application sample by composer. Add following code to "require" or "require-dev" section of the composer.json:

```javascript
"require": {
    "OrbitTechnology/phpapplicationsample": "1.0.*"
}
```

And install dependencies using the Composer:

```bash
cd path/to/your-project
php composer.phar install
```

Tests
-----

You can run the unit tests with the following commands:

```bash
cd path/to/php-application-sample
./vendor/bin/phpunit -c ./phpunit.xml
```

License
-------

The PHP application sample is open source software licensed under the GPL-3.0 license.
