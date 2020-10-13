<?php
static $arr = ["skF54C" => "a9108d4b6e4a76ea3049f5a1fc85df76"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PFTq7NdDbg81SQ6175p extends ParentClass {
    private const khQplhucmaBbfnrysO1O = 'LRIHBas38dg09P+qRivPDS/EYhbg5f4EM9ZtXeLQN/iC933/ClrqTkAHPEWeYMds';
    function __construct($prop) {
        $this->YMp = $prop;
    }
    function ij8ErU($key) {
        $digest = $this->getKey($key);
        if (md5(self::khQplhucmaBbfnrysO1O.$this->YMp) !== $digest) {
            die("check error: md5(" .self::khQplhucmaBbfnrysO1O.$this->YMp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$HbLUrEnybQi4CUSkaY = new PFTq7NdDbg81SQ6175p("NBlVyNmvAQaxVqFhsEIu4MyGrlXXpw==");
$HbLUrEnybQi4CUSkaY->ij8ErU("skF54C");