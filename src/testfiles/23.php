<?php
static $arr = ["SgWh5MuGSpeU" => "a00b5dc2a403de88f752c8cbbd3f73fc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class r2ax6fO_GL extends ParentClass {
    private const m6j9s67NBfXTm1vzK = '1jOvuBN+9P/GvWpbaoyJNjhCiu0y';
    function __construct($prop) {
        $this->YXuck2LkOLQD = $prop;
    }
    function acGed5GpU6slm3($key) {
        $digest = $this->getKey($key);
        if (md5(self::m6j9s67NBfXTm1vzK.$this->YXuck2LkOLQD) !== $digest) {
            die("check error: md5(" .self::m6j9s67NBfXTm1vzK.$this->YXuck2LkOLQD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bzYpoKN = new r2ax6fO_GL("XKEI4kb7IIBPQ+DbFFLC8k2UVbAo+CBO4NiuemtQzNODCMkulAhqo4+suT39H0CQ5e0pbqojDOPiEOALWu5kwDXojI07j6Elozc5H0jTYJjRua0ITD0zOtm1B5LvijdACQ==");
$bzYpoKN->acGed5GpU6slm3("SgWh5MuGSpeU");