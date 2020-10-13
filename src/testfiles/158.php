<?php
static $arr = ["tngabqdNbY9iW" => "212a860b1dc0ed44393798920255b697"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BFxaf extends ParentClass {
    private const CjesaBBOlmoWYjj8jk = 'QqBeEW/Hv4hN0fwdjlApl1cA5HAsnzn/I9y+R7ieOKdwzQnPVQZIlwKczCTOu/pj1AL6IRTD0vA0AcOH+x8=';
    function __construct($prop) {
        $this->O_ = $prop;
    }
    function OfTljbjGyGLnXfi36W($key) {
        $digest = $this->getKey($key);
        if (md5(self::CjesaBBOlmoWYjj8jk.$this->O_) !== $digest) {
            die("check error: md5(" .self::CjesaBBOlmoWYjj8jk.$this->O_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ToTeG = new BFxaf("4cNhva0IoOzAv3LRLClnjeT6EE0IOUW7vMADCq9Am70=");
$ToTeG->OfTljbjGyGLnXfi36W("tngabqdNbY9iW");