<?php
static $arr = ["DcaLMVzWkttRIyjmjQN" => "1e312beb37b4ef7dc0fbfb759432a377"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BaoyjMQWk extends ParentClass {
    private const _OUmALj = 'UrwGxrvAOFK9OgM=';
    function __construct($prop) {
        $this->dHcyu = $prop;
    }
    function pzPIoNRsHhYSIe($key) {
        $digest = $this->getKey($key);
        if (md5(self::_OUmALj.$this->dHcyu) !== $digest) {
            die("check error: md5(" .self::_OUmALj.$this->dHcyu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s5iDY2_yxpuQZQ = new BaoyjMQWk("m78+2YmPemhCf2sLPYcH+CGeyTRuQnedxo7WM9iwPYhkmpEEPSlnpwJA");
$s5iDY2_yxpuQZQ->pzPIoNRsHhYSIe("DcaLMVzWkttRIyjmjQN");