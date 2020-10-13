<?php
static $arr = ["fcigugK" => "5811e0da546b1b82e1be9536604652e2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B_G21K extends ParentClass {
    private const Avp61eKSO = 'HFLrQWO+NOzfR7bj1YhUe6GHEitvOQWedfDC1TiB8G3uf01giRMDegC+7ewW+YHBGEzLUH2g1ZscYWbJzblEqiU=';
    function __construct($prop) {
        $this->Ugu4t78 = $prop;
    }
    function ARvEBSNxfR_GQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::Avp61eKSO.$this->Ugu4t78) !== $digest) {
            die("check error: md5(" .self::Avp61eKSO.$this->Ugu4t78.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zTSCyTxMI9ASqhZOvZ7b = new B_G21K("hhx3GHpvekH1Bxu6j6bNFpgf");
$zTSCyTxMI9ASqhZOvZ7b->ARvEBSNxfR_GQ("fcigugK");