<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test(): void
    {
        $this->getMockFromWsdl(__DIR__.'/../wsdl.xml');
    }
}