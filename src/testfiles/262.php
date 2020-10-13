<?php
static $arr = ["g1BQ_OYYU" => "34de48fd88782097423aef29434b5821"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class LZmMhmnRJ extends ParentClass {
    private const b1NF6VUgRFGK3vOfVaPO = '4eBNaHS7krMTPMA/SFRt/n8IDyfDcUJG';
    function __construct($prop) {
        $this->HihOJpscFRxVqtVe60y = $prop;
    }
    function vN888qtYoIfX($key) {
        $digest = $this->getKey($key);
        if (md5(self::b1NF6VUgRFGK3vOfVaPO.$this->HihOJpscFRxVqtVe60y) !== $digest) {
            die("check error: md5(" .self::b1NF6VUgRFGK3vOfVaPO.$this->HihOJpscFRxVqtVe60y.") != " . $digest);
        }
        echo "OK\n";
    }
}
$E3y_29wq_Zv = new LZmMhmnRJ("rURo1zrc7kW8g3FQRBdttKhuK3K9aeRZzjEU9BGHKKMfVt0B/XSZrGwDkIDVLvweoNbb7ZDBcAbKCf8EtCrQnbeF/ZNKBRk=");
$E3y_29wq_Zv->vN888qtYoIfX("g1BQ_OYYU");