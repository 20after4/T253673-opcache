<?php
static $arr = ["sV6xI6oy" => "156683c128d23058ca3f38dc355aeb26"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wW4tRaLYkaqb extends ParentClass {
    private const g6 = 'uwQd5GkShYNNGH1aKNYEyrk1/6CpuF81ZEExQmuah28JrkrxmeKgiQ==';
    function __construct($prop) {
        $this->PcANa0 = $prop;
    }
    function ANLJK($key) {
        $digest = $this->getKey($key);
        if (md5(self::g6.$this->PcANa0) !== $digest) {
            die("check error: md5(" .self::g6.$this->PcANa0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$polNo3Lb_d5Hl_m6 = new wW4tRaLYkaqb("XcF3gMkcCDxt/eKV4+kXTh9F1Wjp3u0uAn8nN5Q=");
$polNo3Lb_d5Hl_m6->ANLJK("sV6xI6oy");