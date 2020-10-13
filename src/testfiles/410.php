<?php
static $arr = ["pURLv5QFtZ_1FdeHzBJ9" => "5abfd47d12075be1e3d1435cda22f8d2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HGSSTNiUWRuqsqJmYuK extends ParentClass {
    private const Ibq8uepVtcXh8 = 'vSaqoV1BKj/2ZSC6tQBb+qFHZF/v+VltMQWgKVTCZ/nICGpmPqbDeWCnuBte83o=';
    function __construct($prop) {
        $this->Pp = $prop;
    }
    function oW8e71Phr3H3F_uh($key) {
        $digest = $this->getKey($key);
        if (md5(self::Ibq8uepVtcXh8.$this->Pp) !== $digest) {
            die("check error: md5(" .self::Ibq8uepVtcXh8.$this->Pp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oVNyJNjVFs80 = new HGSSTNiUWRuqsqJmYuK("E+hu27XGgxfMoEY0IKsib40hWpXUvnXVzRBLt6Bg5EaqiZPepOLAA5sgVG7ddEpo09SqLSmTTPNWa0BIEeckRXNZw5+itw==");
$oVNyJNjVFs80->oW8e71Phr3H3F_uh("pURLv5QFtZ_1FdeHzBJ9");