<?php
static $arr = ["b4QDCPzGx" => "723de40dd57c8c21ab81f0356f17beb0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PvC0rsI6kTm5OlVx_ie extends ParentClass {
    private const tz54gN52ssgb = 'dpqnST/C5xefhqsCQBTr1g==';
    function __construct($prop) {
        $this->Rw8 = $prop;
    }
    function vZUjxq4n7($key) {
        $digest = $this->getKey($key);
        if (md5(self::tz54gN52ssgb.$this->Rw8) !== $digest) {
            die("check error: md5(" .self::tz54gN52ssgb.$this->Rw8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lNjqxZwXls0Kwmb96Hd = new PvC0rsI6kTm5OlVx_ie("tLpTKBZaxXsELR1XLryZVNT4gNHzmWCfeqFTpvdJfU5ejkXZq4i80smfWNoxb2WrLvAgyVYclmYcGjVS0LWqGaUC7tfveGct9n+v8YTllP9cn/ZfswabpL81SVg=");
$lNjqxZwXls0Kwmb96Hd->vZUjxq4n7("b4QDCPzGx");