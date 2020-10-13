<?php
static $arr = ["ioHllEeriUb5ueYERqcd" => "0fa71a8fb4db124b73e13efe80349060"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ROPcjm5 extends ParentClass {
    private const gpoJOIimJtZ = 'f51JmkxLbak/t7S9F1FDJihGzHNR2NRJBAGhAM1PnFy82vE56Rwqnk5oNVV/ToXbSYc+cvIwIltPzjh4KlYPVgjoHe+H4cTpU8wHcvvxfY9i/PjKR1u+2f8HWTOY';
    function __construct($prop) {
        $this->FZFUfsoX30nrOGxBZy = $prop;
    }
    function s0hvGbMZiiRMXM($key) {
        $digest = $this->getKey($key);
        if (md5(self::gpoJOIimJtZ.$this->FZFUfsoX30nrOGxBZy) !== $digest) {
            die("check error: md5(" .self::gpoJOIimJtZ.$this->FZFUfsoX30nrOGxBZy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PzvlLOAPbOEdOr = new ROPcjm5("rt/FQzPkd9ydpMQ=");
$PzvlLOAPbOEdOr->s0hvGbMZiiRMXM("ioHllEeriUb5ueYERqcd");