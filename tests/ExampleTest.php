<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    function test_something()
    {
        $directive = $this->prophesize(BladeDirective::class);

        $directive->foo()->shouldBeCalled();
    }
}

class BladeDirective
{
    public function foo()
    {
        # code...
    }
}
