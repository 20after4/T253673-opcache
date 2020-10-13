<?php
static $arr = ["SV8S" => "b0ead6590f676005c481ea6f22fb6065"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class imAkOlppHzdzb381bacj extends ParentClass {
    private const ebfneza8ihxqyC1 = 'LouYm0Y9iE7sYsiWW0xuJRgMrj3Op41nAUJlX03h8Yk1IXPRHnVURIHttga+T2gO8G3i42C85LnXgIH7uAaj49wSw1vt6aiUg4ei3Q0GxOy5IiC5CFumai5kgvAv';
    function __construct($prop) {
        $this->CR = $prop;
    }
    function JF3P2xvN467($key) {
        $digest = $this->getKey($key);
        if (md5(self::ebfneza8ihxqyC1.$this->CR) !== $digest) {
            die("check error: md5(" .self::ebfneza8ihxqyC1.$this->CR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$azgpk3hshufoR = new imAkOlppHzdzb381bacj("pMr4/uSv1wM/2i4Yt3Wv8dq4GhPUiT8CVvLAw2+Oys08JX1tHCOKAQl0OTBLIi5Mph5HgteyuFfc3hY=");
$azgpk3hshufoR->JF3P2xvN467("SV8S");