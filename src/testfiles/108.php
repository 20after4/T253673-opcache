<?php
static $arr = ["S9nFpRY3NIHUIyjRWAjF" => "82dffccdb03ff76c4b4e7cab8bbc494b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class MayFFisPswIIPGjuxIQ3 extends ParentClass {
    private const kmhzSTDAO8KK = 'tA2qRHX9WVY/trg0NzZnNVAr';
    function __construct($prop) {
        $this->mgtGh67Chl0f_sxXlu5 = $prop;
    }
    function bC8($key) {
        $digest = $this->getKey($key);
        if (md5(self::kmhzSTDAO8KK.$this->mgtGh67Chl0f_sxXlu5) !== $digest) {
            die("check error: md5(" .self::kmhzSTDAO8KK.$this->mgtGh67Chl0f_sxXlu5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$UBE = new MayFFisPswIIPGjuxIQ3("e12fsHVuKyMGLBvGr5Xhm85sv7+zOEgVeboJDlwC+sUveEIJWhXNl7hKVQEQ5plD0NLLfwaXX9Fezz/AIw==");
$UBE->bC8("S9nFpRY3NIHUIyjRWAjF");