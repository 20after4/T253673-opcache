<?php
static $arr = ["O0SyGXl4FhXljQRoW" => "3c6bcc71471a9d78cac0c42417983b07"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class DH8Ul9SrC3 extends ParentClass {
    private const TDVuA = 'swxN+nN3SoR85MwhYA1qdSw60dTpcLGLi8z5XuX63EekBiUYQeY6zUbiL7gt8Jmt3hgSUjdIEvfdveXwrBIdM77eImB1CVajWsKjKB5hiBRMQxaueR22GGxwOMJ1Q+5ElrVR';
    function __construct($prop) {
        $this->OJ = $prop;
    }
    function UYv90pXJeF($key) {
        $digest = $this->getKey($key);
        if (md5(self::TDVuA.$this->OJ) !== $digest) {
            die("check error: md5(" .self::TDVuA.$this->OJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$JnDY4e = new DH8Ul9SrC3("O4+kKqDYof+MD12r9Hy7Bw==");
$JnDY4e->UYv90pXJeF("O0SyGXl4FhXljQRoW");