<?php
static $arr = ["qqHVgdr_fSZ6" => "f6c8dc02d574cc5a140b5a51697b9dee"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class urOhz extends ParentClass {
    private const voq0 = 'GZlPDLrENnYj967JGJ0wyXpFCzeEnOLwXaD53NM4kxWQK7IXy5H+hf93JIXB4V5N9ioQOcLG+Gp9p5+N3NGk7Z+Gx8qhl/8bzzjGNb3L0h748SjJNtbo2lVRKVlN0Dd+';
    function __construct($prop) {
        $this->r_STJIAWveJ3p = $prop;
    }
    function pjWbRQVf3s($key) {
        $digest = $this->getKey($key);
        if (md5(self::voq0.$this->r_STJIAWveJ3p) !== $digest) {
            die("check error: md5(" .self::voq0.$this->r_STJIAWveJ3p.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oYxGEcy = new urOhz("/UydaJAsO02Lm8r9MXdoA4rcQfnKqjdYvmC5rX+HVKyM7KYfF5CRWzXBLyyEl8AsMzDXbH+w1IwpLmrwPg==");
$oYxGEcy->pjWbRQVf3s("qqHVgdr_fSZ6");