<?php
static $arr = ["SXDRraw" => "efa47505f689ab454ad2b0abfcd6a368"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class pKj9ld extends ParentClass {
    private const pPinULs1UBL = 'jWfaNY0ZI+wzwdyD2cdYBKgfqSvDo7iUYPRF+acwSFWrqlfBPScpq7NM405mTsg=';
    function __construct($prop) {
        $this->MtVi8NNJnvtN8_6j_Ck = $prop;
    }
    function N1jHSew($key) {
        $digest = $this->getKey($key);
        if (md5(self::pPinULs1UBL.$this->MtVi8NNJnvtN8_6j_Ck) !== $digest) {
            die("check error: md5(" .self::pPinULs1UBL.$this->MtVi8NNJnvtN8_6j_Ck.") != " . $digest);
        }
        echo "OK\n";
    }
}
$S3E1uRKaWNsN = new pKj9ld("pun8tchALyaya3Fev0jAB7fI6eiNlrsk1n7NToixYjolCGaXWIp7qTc=");
$S3E1uRKaWNsN->N1jHSew("SXDRraw");