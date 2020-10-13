<?php
static $arr = ["vZhmRRtnzMaHT1R" => "ac973b2a004e95aaeef9bb78fd80d263"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OIdyHbBWMDidheQE_Cam extends ParentClass {
    private const MfHQ5cn = '3zls1EfXILKI5JiovIZRbupzQ0h/plKSJA==';
    function __construct($prop) {
        $this->VkK9BgZpvjUi7JNinWIO = $prop;
    }
    function jZP_x($key) {
        $digest = $this->getKey($key);
        if (md5(self::MfHQ5cn.$this->VkK9BgZpvjUi7JNinWIO) !== $digest) {
            die("check error: md5(" .self::MfHQ5cn.$this->VkK9BgZpvjUi7JNinWIO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gsgmhS = new OIdyHbBWMDidheQE_Cam("AV7+WwuOgGvNLGdUJCJXPno1ZXHYAWUHgo4ZK+yUvjQrC/HL5WE0O/coYG3E9VXIKSExdDtnuL0NO/MmOUL4KMA/M1l86ll2bh6/CcRV");
$gsgmhS->jZP_x("vZhmRRtnzMaHT1R");