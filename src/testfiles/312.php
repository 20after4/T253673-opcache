<?php
static $arr = ["OywqPWaYtSNeb4" => "a6145d6f37192442b6bfd5e53010b9b1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FOi extends ParentClass {
    private const e = 'r7Dva0g/DmRK6RwspjTdqHnKOLzMq1OSTFVQZtRckAMrSj4JIYbqVhEPe9Uz1oXvQky1kKMfO0k2a1oXdIDu9BalewO9wUnuChC9vkKGtNh/zs+iC6hCeA==';
    function __construct($prop) {
        $this->S0DzsSXrNysU = $prop;
    }
    function K($key) {
        $digest = $this->getKey($key);
        if (md5(self::e.$this->S0DzsSXrNysU) !== $digest) {
            die("check error: md5(" .self::e.$this->S0DzsSXrNysU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Azw_a_6N1Rp = new FOi("cMtC5GBRHmjC7Ph1c3IZ9JQgL/kmC62L0y0Q3Serz3FH1PQ8/Svg3z+XFEaOix/Gb3U0+INZp3FDf7IILEDRtoViiFAlygTCteFkgs5x8U8UHLOGNZVMYxY=");
$Azw_a_6N1Rp->K("OywqPWaYtSNeb4");