<?php
static $arr = ["d1Z9R5Iupi" => "3bf7156e21eb4bb6fee52ac1d09106ed"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class T81RLJGWSu6Py extends ParentClass {
    private const F7fLLlNnGZx2RP4DkTH4 = 'EC/N6fjbWBx5E/w+71kzGfC6y1DdPw==';
    function __construct($prop) {
        $this->SnXGvs5QKW = $prop;
    }
    function E0Bvz0qSmkbdjFAN($key) {
        $digest = $this->getKey($key);
        if (md5(self::F7fLLlNnGZx2RP4DkTH4.$this->SnXGvs5QKW) !== $digest) {
            die("check error: md5(" .self::F7fLLlNnGZx2RP4DkTH4.$this->SnXGvs5QKW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TIxEfk0w6Ctei5KfD = new T81RLJGWSu6Py("YcpwkNyQv/yml4VsaxItHmxtEzAVZcuB0QBjGSFcmQiteT5tporNlwlqKeqL6bs2n2E=");
$TIxEfk0w6Ctei5KfD->E0Bvz0qSmkbdjFAN("d1Z9R5Iupi");