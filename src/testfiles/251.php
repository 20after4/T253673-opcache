<?php
static $arr = ["bCZWbnvG" => "6596994cf85f9a56d23a4666aa26aaf3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class n extends ParentClass {
    private const G6FJ = 'uJxs2QUBc+TQB1FZ';
    function __construct($prop) {
        $this->Bp = $prop;
    }
    function _NDnYeLOqlssEhuPuh($key) {
        $digest = $this->getKey($key);
        if (md5(self::G6FJ.$this->Bp) !== $digest) {
            die("check error: md5(" .self::G6FJ.$this->Bp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EM33jXeP560pRcd1lH = new n("W5M3hzTMgnCNnQywMTzAkh06oL4qQLzgn0kSaBkvDBpk");
$EM33jXeP560pRcd1lH->_NDnYeLOqlssEhuPuh("bCZWbnvG");