<?php
static $arr = ["DF9Ck" => "b8830f38b44f3ae0edd1b02e3ae3461f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class E4K7RuuEcKD extends ParentClass {
    private const a = '/t27HSzxAyNQvwvSfo5fFcVRSYkrkC1c3dbJrQ8OyGUYUQ==';
    function __construct($prop) {
        $this->yFoO97tphjkzRaYo = $prop;
    }
    function eXveYGy($key) {
        $digest = $this->getKey($key);
        if (md5(self::a.$this->yFoO97tphjkzRaYo) !== $digest) {
            die("check error: md5(" .self::a.$this->yFoO97tphjkzRaYo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gT_ = new E4K7RuuEcKD("kGlZXa8Rm1e92pcpVvl9xJqxKAJ9ZH4CDepKnFghDSEPFXY=");
$gT_->eXveYGy("DF9Ck");