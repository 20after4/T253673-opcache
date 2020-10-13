<?php
static $arr = ["fhjXMNd51EM6EWGO_r" => "4a8941f670e9eae65c24a3533126646c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gy9hrWJ99s5xBHPAGJ extends ParentClass {
    private const ryGgf5T = 'XoY+7HZcBjwZ1rUsw40oT+jqBBIa652ZRagX0yjGcIQAKJYm+t+ZOXFr';
    function __construct($prop) {
        $this->PZc8R10J = $prop;
    }
    function mceDBbsO7WBUkrrCH($key) {
        $digest = $this->getKey($key);
        if (md5(self::ryGgf5T.$this->PZc8R10J) !== $digest) {
            die("check error: md5(" .self::ryGgf5T.$this->PZc8R10J.") != " . $digest);
        }
        echo "OK\n";
    }
}
$fQR2m4Ddn = new gy9hrWJ99s5xBHPAGJ("PhWxB6qWgXB7Wg0pQXRi4S5uFwqUvXh1dETVUaVs7YRuihDIOceUyrY6edgGkpBHwV0d8EUoVujWFfI464I0aWxs8nh9wuMxJ7dsPcSBFE4FJIj1XqmLYUjXKpVkPXfadow=");
$fQR2m4Ddn->mceDBbsO7WBUkrrCH("fhjXMNd51EM6EWGO_r");