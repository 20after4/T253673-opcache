<?php
static $arr = ["L" => "2a56025e14b25ee3ae11456e6bf6fc7d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fhtMC7IAqQjPzBECWSx extends ParentClass {
    private const ulnH5t6I01rRrFo2g = 'CIAFCKva0z5DPsEZ2EJfCGGSLC+k6nciEU3R8Y0wSttel41p3kZ0zg+sa7TgX/c=';
    function __construct($prop) {
        $this->m4Kgn9fAuF9oE = $prop;
    }
    function uwB4go_gg2L($key) {
        $digest = $this->getKey($key);
        if (md5(self::ulnH5t6I01rRrFo2g.$this->m4Kgn9fAuF9oE) !== $digest) {
            die("check error: md5(" .self::ulnH5t6I01rRrFo2g.$this->m4Kgn9fAuF9oE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$chKpxpa9MExT9LAC = new fhtMC7IAqQjPzBECWSx("uDBC6VqAQWHjPcVFTqo=");
$chKpxpa9MExT9LAC->uwB4go_gg2L("L");