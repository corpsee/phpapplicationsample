<?php

/**
 * PHP Application Sample
 *
 * @copyright Copyright 2018, Orbit Technologies
 * @license   https://github.com/OrbitTechnology/phpapplicationsample/blob/master/LICENSE
 * @link      https://github.com/OrbitTechnology/phpapplicationsample
 * @author    Dmitry Khomutov <poisoncorpsee@gmail.com>
 * @author    Nolan Perry <hollow@omega-grid.org>
 */

namespace PHPApplicationSample;

/**
 * Class ApplicationClass
 *
 * @package PHPApplicationSample
 * @author  Orbit Technologies <dev@omega-grid.org>
 */
class ApplicationClass
{
    const VERSION = '1.0.0';

    public function run()
    {
        echo 'PHP Application Sample. v' . self::VERSION . PHP_EOL;
    }
}
