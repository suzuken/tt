<?php

class TimerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function test()
    {
        $t = new Tt\Timer();
        $this->assertEquals($t->plain(), "hello world.");
    }

    public function tearDown()
    {
    }
}

