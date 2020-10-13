<?php
static $arr = ["T" => "45820e0f3f25a0d9e607f48a375c4f0c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class i9QA1sAE3N extends ParentClass {
    private const E2GuVMBz4sx_eMGjFYx = 'KDFd1jFfIyHcGOk94Ou/FMyLbCuvWbQo9cia96HZl5kTEvz5X9hX9R/LS6zqRJsNGkHp4Q3KRaP1Rg5rGzwHUjUT8nw8PNA8E1A3a07sECjQH9RtzXAX';
    function __construct($prop) {
        $this->LxYbnx = $prop;
    }
    function ipKcoaM31DYg1GDEAyIT($key) {
        $digest = $this->getKey($key);
        if (md5(self::E2GuVMBz4sx_eMGjFYx.$this->LxYbnx) !== $digest) {
            die("check error: md5(" .self::E2GuVMBz4sx_eMGjFYx.$this->LxYbnx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ymkl05IWAu3XdAace = new i9QA1sAE3N("dtaEx1gGDn0ELpy8IFsBrTqRm5Ts/apzzulsCwj4xX/I5BTohgHQUXJ3+NLhUuG/TSvjB0yRbt/5DjmD//pLsdPg0qZpe7YGMCxl8cl2W3V7Yxw=");
$ymkl05IWAu3XdAace->ipKcoaM31DYg1GDEAyIT("T");