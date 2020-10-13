<?php
static $arr = ["yhfue2Mv" => "d8869735564d25e2788cdc35b3663147"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class DW_bTHl extends ParentClass {
    private const Gx5Ga8tKz4Rkjl4A1 = 'jokhaoJhyJlXJsEEczUd0k5uTZx/2MMJF0N09RBg7ZG120le1Ocjis7oDhfobUmvQA==';
    function __construct($prop) {
        $this->qmLwNU9I9IaG0 = $prop;
    }
    function qvsx1A($key) {
        $digest = $this->getKey($key);
        if (md5(self::Gx5Ga8tKz4Rkjl4A1.$this->qmLwNU9I9IaG0) !== $digest) {
            die("check error: md5(" .self::Gx5Ga8tKz4Rkjl4A1.$this->qmLwNU9I9IaG0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PfsWYxVnxMaTR7fdRlGY = new DW_bTHl("nfrqMGFmI+Ee8N73uKH+OF9u38DP2PtGCX62B5wMyPdJfKN+wttG/Qy7YSiDIX0Q9dfQv1pWx5TdvFaAyOtHzxzYo+QWug==");
$PfsWYxVnxMaTR7fdRlGY->qvsx1A("yhfue2Mv");