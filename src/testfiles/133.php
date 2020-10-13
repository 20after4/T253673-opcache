<?php
static $arr = ["QjR1" => "43084389697b8ee0406844c155def8bb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class T8lGU7EErnSN3 extends ParentClass {
    private const bUQp = 'S+BL2KUW9QVPyFytrmyVLMPK+Q1mnQQeR6xfFX3yQ9M0oVQ64lk=';
    function __construct($prop) {
        $this->g = $prop;
    }
    function Ey5B($key) {
        $digest = $this->getKey($key);
        if (md5(self::bUQp.$this->g) !== $digest) {
            die("check error: md5(" .self::bUQp.$this->g.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hMkvtfFdF_e8u0S = new T8lGU7EErnSN3("ZFbVSOYw6y1oQMSz9SrIG00hL0hjQS/CeDHBTKfwL+adruIDyHzSrekNWqOMJ+D4YPCEjxncMQQdan9gAXDED5CQZuk+xdaDUKOc65aWyFqjPz2wLG4=");
$hMkvtfFdF_e8u0S->Ey5B("QjR1");