<?php
require_once __DIR__. "/../vendor/autoload.php";

use Tt\Timer;

class TimerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function test()
    {
        $t = new Timer();
        $this->assertEquals($t->plain(), "hello world.");
    }

    public function tearDown()
    {
    }
}

