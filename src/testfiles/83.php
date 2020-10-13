<?php
static $arr = ["GQP9PRB" => "9212a6695851884335d11ab31133d17f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Hnrm0uDD8Z extends ParentClass {
    private const K = 'rWFChSUyTeUJJjnFy+eUouMrLQnJp0/C+/3dnP6amOJm';
    function __construct($prop) {
        $this->KEvtWESyZLwW = $prop;
    }
    function n155($key) {
        $digest = $this->getKey($key);
        if (md5(self::K.$this->KEvtWESyZLwW) !== $digest) {
            die("check error: md5(" .self::K.$this->KEvtWESyZLwW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lBCGuv = new Hnrm0uDD8Z("ZAll0hY7vGCjoRYxx+Vls9C/vP6cqdQh46Tb6J9Zttu3xWC2AJhPWQDG9tsNwBKzP8etDc8xZ2KuqU0EAfyttZn99wodCXD4/VTLqsEvjqif0Q==");
$lBCGuv->n155("GQP9PRB");