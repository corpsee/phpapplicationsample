<?php

namespace PHPApplicationSample\Tests;

use PHPApplicationSample\ApplicationClass;

/**
 * Class ApplicationClassTest
 *
 * @package PHPApplicationSample\Tests
 * @author  Corpsee <poisoncorpsee@gmail.com>
 */
class ApplicationClassTest extends \PHPUnit_Framework_TestCase
{
    public function testSample()
    {
        $application = new ApplicationClass();
        $this->assertInstanceOf('PHPApplicationSample\\ApplicationClass', $application);
    }
}
