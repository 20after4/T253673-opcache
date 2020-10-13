<?php
static $arr = ["UceYQm8EEbDlvtEzVug" => "1fbb91eecdef644ac6d80d3ef03d3d3c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gNWERje5by extends ParentClass {
    private const ewZE7OovzWAbSJF = 'A7VJYovnLh8Lqjaa/d1LgQaxC0LqG/5nrfuQvUtz4oLGmfpYOZl7IS8gGWaUhw==';
    function __construct($prop) {
        $this->XoIbOmcecUYFn = $prop;
    }
    function k68_9IDtyT($key) {
        $digest = $this->getKey($key);
        if (md5(self::ewZE7OovzWAbSJF.$this->XoIbOmcecUYFn) !== $digest) {
            die("check error: md5(" .self::ewZE7OovzWAbSJF.$this->XoIbOmcecUYFn.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ZAxMIz7AMUlkgF = new gNWERje5by("2tWNKhl10Z2GgkH5RAHcjA6OLZXXykqfg0S8eEaUuwLtUUH0keP9QqfSqF6argR+ZKyXQNvFeM+ERqzd");
$ZAxMIz7AMUlkgF->k68_9IDtyT("UceYQm8EEbDlvtEzVug");