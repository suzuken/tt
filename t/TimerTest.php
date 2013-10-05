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

    public function test_いい感じに時刻を日本語にする()
    {
        $t = new Tt\Timer();
        $this->assertEquals($t->timeJapanize("2013/10/03 19:30:01"), "2013年10月03日 19時30分01秒");
        $this->assertEquals($t->timeJapanize("2013/10/03 20:30:01"), "2013年10月03日 20時30分01秒");
    }

    public function test_指定した時間まで何分かを出す()
    {
        $t = new Tt\Timer();
        $from = "2013/10/03 11:00:00";
        $to = "2013/10/03 12:00:00";
        $this->assertEquals($t->timeDiff($from, $to), 60);
        $from = "2013/10/03 16:00:00";
        $to = "2013/10/03 18:00:00";
        $this->assertEquals($t->timeDiff($from, $to), 120);
        $from = "2013/10/02 16:00:00";
        $to = "2013/10/03 18:00:00";
        $this->assertEquals($t->timeDiff($from, $to), 24 * 60 + 120);
        $from = "2013/10/02 16:30:00";
        $to = "2013/10/03 18:00:00";
        $this->assertEquals($t->timeDiff($from, $to), 24 * 60 + 90);
    }

    public function tearDown()
    {
    }
}

