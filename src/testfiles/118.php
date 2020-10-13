<?php
static $arr = ["B3k7U5PVB_2m_EyMmFP" => "6f236659cef65c804040b0f35c4f646b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QD_KeionQl0iU76b5J7 extends ParentClass {
    private const FWv_b = 'LPZcXN22SUZAcSLKbz/gxPaO0D5CguQn0jDZEphp8SXHLCQAncZ40bk=';
    function __construct($prop) {
        $this->REYhdv9Uq80sT_jJ = $prop;
    }
    function O_j4($key) {
        $digest = $this->getKey($key);
        if (md5(self::FWv_b.$this->REYhdv9Uq80sT_jJ) !== $digest) {
            die("check error: md5(" .self::FWv_b.$this->REYhdv9Uq80sT_jJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Unp3O9c1q2VHViDHM8 = new QD_KeionQl0iU76b5J7("tu9u2sdrIiodPeyQibQLvrdldP3EVHwAXjNROmYegzyROYd1jg==");
$Unp3O9c1q2VHViDHM8->O_j4("B3k7U5PVB_2m_EyMmFP");