<?php
static $arr = ["UFdL" => "5720b474400dd04dadf074c042ffbf67"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class nd extends ParentClass {
    private const mTxGSNCKrL = 'M8NTSk0U28n8gjSvDJ3Kzy35dbZiqHRRQtSaNuhr81MVJPhYH5/gvX+tU+blEqQ=';
    function __construct($prop) {
        $this->udPl0C98Xd_rVZ = $prop;
    }
    function pdDcYlMtX8zzP_UZkwP($key) {
        $digest = $this->getKey($key);
        if (md5(self::mTxGSNCKrL.$this->udPl0C98Xd_rVZ) !== $digest) {
            die("check error: md5(" .self::mTxGSNCKrL.$this->udPl0C98Xd_rVZ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Vdd = new nd("fBNcu5lcEUcOEMVCWuLnsE3DgSmybWX0RUU/X7/poYwmBiD6zw==");
$Vdd->pdDcYlMtX8zzP_UZkwP("UFdL");