<?php
namespace Tt;

class Timer
{
    public function plain()
    {
        return "hello world.";
    }

    public function timeJapanize($time)
    {
        $t = \DateTime::createFromFormat("Y/m/d H:i:s", $time);
        return $t->format("Y年m月d日 H時i分s秒");
    }

    public function timeDiff($from, $to)
    {
        $fromTime = \DateTime::createFromFormat("Y/m/d H:i:s", $from);
        $toTime = \DateTime::createFromFormat("Y/m/d H:i:s", $to);
        $interval = $fromTime->diff($toTime);
        return $interval->format("%D") * 24 * 60+ $interval->format("%H") * 60 + $interval->format("%i");
    }
}
