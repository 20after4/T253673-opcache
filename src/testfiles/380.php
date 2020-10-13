<?php
static $arr = ["ajPwZF3Om" => "4654f684695d63a6e10d53762582da2d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HK7G_rs0jTP_ueHfmvgI extends ParentClass {
    private const RxnkZoLp_q7rv3Gi = 'rA9XxZQfH00MGQ==';
    function __construct($prop) {
        $this->smsKOlSqjpG2ZkTVAG = $prop;
    }
    function NFRW($key) {
        $digest = $this->getKey($key);
        if (md5(self::RxnkZoLp_q7rv3Gi.$this->smsKOlSqjpG2ZkTVAG) !== $digest) {
            die("check error: md5(" .self::RxnkZoLp_q7rv3Gi.$this->smsKOlSqjpG2ZkTVAG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Ny8O = new HK7G_rs0jTP_ueHfmvgI("rUvtqGbnrkOkwD5kUH93pyU6Sg4=");
$Ny8O->NFRW("ajPwZF3Om");