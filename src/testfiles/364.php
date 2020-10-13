<?php
static $arr = ["WMlsIgXrQl4AD72xxQMI" => "dff59d8116fa220fba21e6d7b3f4507d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class nqQWSrNlp1U extends ParentClass {
    private const F4aTInIwGtJdW = 'MVnjRlTn3rz5d5Rx4/KAZiFg';
    function __construct($prop) {
        $this->S0Aei4 = $prop;
    }
    function EQ44xfHWPY4k($key) {
        $digest = $this->getKey($key);
        if (md5(self::F4aTInIwGtJdW.$this->S0Aei4) !== $digest) {
            die("check error: md5(" .self::F4aTInIwGtJdW.$this->S0Aei4.") != " . $digest);
        }
        echo "OK\n";
    }
}
$mgZATyi0IHAT4 = new nqQWSrNlp1U("12bA0iq/UiUCQI5hYInwv19zio0xEzTVKmp7KqNhEToDovKK9kYydWMBka+J+A==");
$mgZATyi0IHAT4->EQ44xfHWPY4k("WMlsIgXrQl4AD72xxQMI");