<?php
static $arr = ["joadonptycj5M5tsfQ8" => "39e21d932d8cdf2f50990151e0faf9d1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class a2xpusqASmosKuZvr extends ParentClass {
    private const R3p0B2o1Xtt8ABTWa = 'Do+9e9sG2Gwrj8iEZVyLE8x+qqlpIQ25L7ughb5QVpsys2NI2JSQyD5OkdamtaXYOqZ77HhF82OARA==';
    function __construct($prop) {
        $this->N5V4q5AW_4Ygl = $prop;
    }
    function rPqlzL7p06($key) {
        $digest = $this->getKey($key);
        if (md5(self::R3p0B2o1Xtt8ABTWa.$this->N5V4q5AW_4Ygl) !== $digest) {
            die("check error: md5(" .self::R3p0B2o1Xtt8ABTWa.$this->N5V4q5AW_4Ygl.") != " . $digest);
        }
        echo "OK\n";
    }
}
$uZMeOOxrgAMXyH = new a2xpusqASmosKuZvr("+Sd0LAet7rL3r7Fcxr3dyHyVYXbOdGuuUAmEPtBVKi/62XWNayQR");
$uZMeOOxrgAMXyH->rPqlzL7p06("joadonptycj5M5tsfQ8");