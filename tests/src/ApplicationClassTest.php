<?php

namespace PHPApplicationSample\Tests;

use PHPApplicationSample\ApplicationClass;

/**
 * PHP Application Sample
 *
 * @copyright Copyright 2018, Orbit Technologies
 * @license   https://github.com/OrbitTechnology/phpapplicationsample/blob/master/LICENSE
 * @link      https://github.com/OrbitTechnology/phpapplicationsample
 * @author    Dmitry Khomutov <poisoncorpsee@gmail.com>
 * @author    Nolan Perry <hollow@omega-grid.org>
 */
class ApplicationClassTest extends \PHPUnit_Framework_TestCase
{
    public function testSample()
    {
        $application = new ApplicationClass();
        $this->assertInstanceOf('PHPApplicationSample\\ApplicationClass', $application);
    }
}
