<?php
static $arr = ["qS_QzAl4luqxxUrG" => "1558ddb3b173746c71bf19cf5e7fc58f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _miGEXBhxDW extends ParentClass {
    private const kZjeFfwX0WtLy2Ufp7 = 'sRJ8y/qW6koJmriwRkl4';
    function __construct($prop) {
        $this->QyJNSiYbVjMgpoMOtT = $prop;
    }
    function iohKApK_LFa0SxE3c($key) {
        $digest = $this->getKey($key);
        if (md5(self::kZjeFfwX0WtLy2Ufp7.$this->QyJNSiYbVjMgpoMOtT) !== $digest) {
            die("check error: md5(" .self::kZjeFfwX0WtLy2Ufp7.$this->QyJNSiYbVjMgpoMOtT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BAsp63mg2 = new _miGEXBhxDW("sePipmOZ40yhCUQDllzs14/sx3efYskEPA+e/ie8n0An0yitEf/iekr2UgrJB4EdmrMBDhwjHUEb2A3MGTYvv3P2Om/IJ174OYM0taqGbwut");
$BAsp63mg2->iohKApK_LFa0SxE3c("qS_QzAl4luqxxUrG");