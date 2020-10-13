<?php
static $arr = ["O4n7YlpkhG_Ek3V" => "18914b0e1a32dfaed753d7836dae9b56"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rOSeH extends ParentClass {
    private const ui2QTPhzu1_Gch = 'j88k+zBMhCG5gCx238hWTqX7Fejy2xJQwDU2ySfiKPS7yhWwDvQs7a1OvJlugw==';
    function __construct($prop) {
        $this->itBC_Ajlbxild5aofwQV = $prop;
    }
    function iUgQq7($key) {
        $digest = $this->getKey($key);
        if (md5(self::ui2QTPhzu1_Gch.$this->itBC_Ajlbxild5aofwQV) !== $digest) {
            die("check error: md5(" .self::ui2QTPhzu1_Gch.$this->itBC_Ajlbxild5aofwQV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$DVxYXfkm8mKv1lz = new rOSeH("py2eWNlMcbrm3QkNDmaOsB8IY+cBA91e2da3lsR7BQpCoYeFtbO2gTBSDGSPTE2+VbU4MOryxk6kv+JNsbj0InrVfimTifxneIwTdF6jX8yv+adzTiSiLacBAzBxzO3e");
$DVxYXfkm8mKv1lz->iUgQq7("O4n7YlpkhG_Ek3V");