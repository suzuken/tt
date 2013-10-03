<?php

class TimerServerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->server = 'http://'.WEB_SERVER_HOST.':'.WEB_SERVER_PORT;
    }

    public function test()
    {
        $this->assertEquals("hello", file_get_contents($this->server . '/index.php'));
    }

    public function tearDown()
    {
    }
}

