<?php
static $arr = ["UiXYnVQ" => "733e611759df1ed657db17b63c6d9fef"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OkHM2hZxsJbwcjE2e9 extends ParentClass {
    private const SsXSyB = 'UYsv/c+EsY093qPQX7zFtF/UU2JMyKrrOmsNyfhppaD8pPH+nQKGZMHFkO5Q7V+qRa9acfj79FxkV1q5sfVd3dZmcSnxiPA8RcHaUtkgXEM=';
    function __construct($prop) {
        $this->zDhPoXwnysdl = $prop;
    }
    function ZhrE21DYsh2($key) {
        $digest = $this->getKey($key);
        if (md5(self::SsXSyB.$this->zDhPoXwnysdl) !== $digest) {
            die("check error: md5(" .self::SsXSyB.$this->zDhPoXwnysdl.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VTTbrdo3VMA4niQg = new OkHM2hZxsJbwcjE2e9("IPwC7qfZHdm2ieYlRQsRAA==");
$VTTbrdo3VMA4niQg->ZhrE21DYsh2("UiXYnVQ");