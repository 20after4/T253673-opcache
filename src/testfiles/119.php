<?php
static $arr = ["kEHFzKOmEjxoSTedaEk" => "9d0d988f38f6f2aa1df1c03007f56b4a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CdF8ha extends ParentClass {
    private const COHt5v_blHjWPc = 'l0yFEkA/lWBwqr67ZWbRdS+sqnATThy8KExOIOGrcmXCZg6++ZKezJFA4OpfM1mG7kNLCSlP+mkFjz5GgwKGkpXy29MJitqUE0BKt8l7dgV/zrepWg==';
    function __construct($prop) {
        $this->ReRY7S70GudNyJ6Vnx = $prop;
    }
    function I8qFjx6mwo($key) {
        $digest = $this->getKey($key);
        if (md5(self::COHt5v_blHjWPc.$this->ReRY7S70GudNyJ6Vnx) !== $digest) {
            die("check error: md5(" .self::COHt5v_blHjWPc.$this->ReRY7S70GudNyJ6Vnx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xGCWAhbUd = new CdF8ha("//v0DgrkWilujsx4xJsRwAXbkzLCCRauOGvaAIg6D231CVdk01+vhJu3UIxxq3JK0TWCjIRXgoEE6aycB7WXUCo=");
$xGCWAhbUd->I8qFjx6mwo("kEHFzKOmEjxoSTedaEk");