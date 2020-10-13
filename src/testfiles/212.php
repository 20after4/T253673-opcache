<?php
static $arr = ["p7LvZlERmF7zxHJ23B1" => "e9da92db0f36f4cbea9111a11212cb55"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ez extends ParentClass {
    private const dsHyJo109gDEwI = '72QNY3gzjjXv8AZKN8ZD9JSmoBvK7ZfrSDi/HaQ/sTuq1r8BRtDKmshnUubFIBnCtkjTpBu9KOQvENGGn3rNiyRXRcu7uyuykj/F4OjcpJDZXAQePz3KdQ/gY2bBh6YEkQ==';
    function __construct($prop) {
        $this->OE8W = $prop;
    }
    function CFVPwJ($key) {
        $digest = $this->getKey($key);
        if (md5(self::dsHyJo109gDEwI.$this->OE8W) !== $digest) {
            die("check error: md5(" .self::dsHyJo109gDEwI.$this->OE8W.") != " . $digest);
        }
        echo "OK\n";
    }
}
$pvvNZ7MiHT330JH = new ez("BSyx1ByP/YWJ43Uveyfrjo2AqvvoHnaYpckVgAFeWxftyMxFg9qqNpW2CDehIw==");
$pvvNZ7MiHT330JH->CFVPwJ("p7LvZlERmF7zxHJ23B1");