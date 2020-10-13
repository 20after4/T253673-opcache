<?php
static $arr = ["tJuBPb" => "df8f5f8f7291fbea93d0e374547d7ca4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class mkZAMWiKf98PVTmkp extends ParentClass {
    private const AneuVFXfmbuE = 'OOJGcPodYRd6YyHYUNfyIdheguX6qiutldGc63FWw6OlCY2FjaKgeL5NI70HrPD8';
    function __construct($prop) {
        $this->qf_ddC = $prop;
    }
    function h8cE_e7UUEGOuN($key) {
        $digest = $this->getKey($key);
        if (md5(self::AneuVFXfmbuE.$this->qf_ddC) !== $digest) {
            die("check error: md5(" .self::AneuVFXfmbuE.$this->qf_ddC.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lT2cKhi8 = new mkZAMWiKf98PVTmkp("dN78ULc1UVOs/IuEQQY=");
$lT2cKhi8->h8cE_e7UUEGOuN("tJuBPb");