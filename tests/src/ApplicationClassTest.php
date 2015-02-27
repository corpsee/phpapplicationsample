<?php

namespace PHPApplicationSample\Tests;

use PHPApplicationSample\ApplicationClass;

class ApplicationClassTest extends \PHPUnit_Framework_TestCase
{
    public function testSample ()
    {
        $application = new ApplicationClass();
        $this->assertInstanceOf('PHPApplicationSample\\ApplicationClass', $application);
    }
}
