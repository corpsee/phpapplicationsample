<?php

/**
 * PHP Application Sample
 *
 * @copyright    Copyright 2014, Corpsee.
 * @license      https://github.com/corpsee/php-application-sample/blob/master/LICENSE
 * @link         https://github.com/corpsee/php-application-sample
 */

namespace PHPApplicationSample;

/**
 * Class ApplicationClass
 *
 * @package PHPApplicationSample
 * @author  Corpsee <poisoncorpsee@gmail.com>
 */
class ApplicationClass
{
    const VERSION = '1.0.0';

    public function run()
    {
        echo 'PHP Application Sample. v' . self::VERSION . PHP_EOL;
    }
}
