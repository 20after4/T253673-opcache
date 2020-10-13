<?php
static $arr = ["lkYo_d" => "63916638ee7b6b17c0f6dd608df75ee6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class dJygOL extends ParentClass {
    private const FaP = '9n8ebLhq6Y6Q9XC6piuG1H9VcbaSSNYg';
    function __construct($prop) {
        $this->poqy_SJncWfTCEeWUJw = $prop;
    }
    function GnCx3Yala($key) {
        $digest = $this->getKey($key);
        if (md5(self::FaP.$this->poqy_SJncWfTCEeWUJw) !== $digest) {
            die("check error: md5(" .self::FaP.$this->poqy_SJncWfTCEeWUJw.") != " . $digest);
        }
        echo "OK\n";
    }
}
$M9DqmxEaaQ = new dJygOL("Vt+NP+WfZVPs/K007KQY49OjI6q6HNCeFp1yLx9FcMt29eGFO2Vf8EK3i3pRbI3Tdl99Sl9O/mRzmnL21RStFZOr4ZJ39Q==");
$M9DqmxEaaQ->GnCx3Yala("lkYo_d");