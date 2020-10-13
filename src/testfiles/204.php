<?php
static $arr = ["igeI3EiuT5vg" => "8286098ad680f2f94dbf631aa30510a2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _j11vqzk8vYsAzd extends ParentClass {
    private const Ld5Nnx6XdlzfPgr6 = '5rWhvQtRtMLnpvCj6lw7sBi5MiQ4RUxPT+KB+Qtilr0SInl5tQqlT0B25YZ0jMpjedbIKKattx6kwc+sog==';
    function __construct($prop) {
        $this->InzhMhdcsUFLQu = $prop;
    }
    function zi($key) {
        $digest = $this->getKey($key);
        if (md5(self::Ld5Nnx6XdlzfPgr6.$this->InzhMhdcsUFLQu) !== $digest) {
            die("check error: md5(" .self::Ld5Nnx6XdlzfPgr6.$this->InzhMhdcsUFLQu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hN6U = new _j11vqzk8vYsAzd("dJOGIJFmhkXCYOmO3vMaNGq9bYSj4hm9vYiWcnZ3YxUIprE=");
$hN6U->zi("igeI3EiuT5vg");