<?php

namespace lennmueller\ContaoHelloWorlddBundle\Tests;

use lennmueller\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('lennmueller\contao-hello-world-bundle', $bundle);
    }
}
