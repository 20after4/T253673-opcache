<?php
static $arr = ["WButN8" => "e64ff32421a7fbcb740de88ace6e7c34"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B0tuJYi extends ParentClass {
    private const YDTNGWv = 'TloehqmTO3uY3RDiJ8ArU1JSKG01ZG0q4nutmJyhOata38TF1E8hYrcLQhcldSO8';
    function __construct($prop) {
        $this->uGYM = $prop;
    }
    function QwVetdsvlzpXuuT2zeM($key) {
        $digest = $this->getKey($key);
        if (md5(self::YDTNGWv.$this->uGYM) !== $digest) {
            die("check error: md5(" .self::YDTNGWv.$this->uGYM.") != " . $digest);
        }
        echo "OK\n";
    }
}
$F_ = new B0tuJYi("ahP5lPTlCxCIoYvyHTey8gXEBSk+b+Thcvf5ng==");
$F_->QwVetdsvlzpXuuT2zeM("WButN8");