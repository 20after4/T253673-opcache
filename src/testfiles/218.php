<?php
static $arr = ["JlEWjTyT" => "1f2f67e19900f9651f0ff862c796802d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xWej7oiyJM extends ParentClass {
    private const GM2OjDLwxw0ToZhB8 = 'KdrUXnhaE8bh9PL5PaxcNlOb4mCvquICYikhqIQoC82X6prUZC3v2nbklmnYapjes8bV+7vAcXbx2ABANPwS0j0eZL77QCYwSAQZP2lB98bOy0FcvnB3JQ==';
    function __construct($prop) {
        $this->PEUeSFIaWJ_ = $prop;
    }
    function MOQ6abXkwPBa4W4gyFhD($key) {
        $digest = $this->getKey($key);
        if (md5(self::GM2OjDLwxw0ToZhB8.$this->PEUeSFIaWJ_) !== $digest) {
            die("check error: md5(" .self::GM2OjDLwxw0ToZhB8.$this->PEUeSFIaWJ_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qryIMM6ZHFMbAoA_hz = new xWej7oiyJM("hEJm0BdlhzhEbCc=");
$qryIMM6ZHFMbAoA_hz->MOQ6abXkwPBa4W4gyFhD("JlEWjTyT");