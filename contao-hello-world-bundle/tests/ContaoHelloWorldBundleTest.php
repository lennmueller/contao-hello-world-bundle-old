<?php

namespace Acme\ContaoHelloWorlddBundle\Tests;

use Acme\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Acme\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}