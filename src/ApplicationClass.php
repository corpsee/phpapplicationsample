<?php

/**
 * PHP Application Sample
 *
 * @copyright    Copyright 2018, Orbit Tecnologies
 * @license      https://github.com/OrbitTechnology/php-application-sample/blob/master/LICENSE
 * @link         https://github.com/OrbitTechnology/php-application-sample
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
