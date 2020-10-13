<?php
static $arr = ["UXmu" => "ee6a21f0d1546269d0ae013249900492"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S0jGh8wWMfkGugL70jK extends ParentClass {
    private const WcS5MO0oCyzu5y87e = 'G0HL7UlWsmV1yZL0nHiM';
    function __construct($prop) {
        $this->fLE = $prop;
    }
    function B0ypq($key) {
        $digest = $this->getKey($key);
        if (md5(self::WcS5MO0oCyzu5y87e.$this->fLE) !== $digest) {
            die("check error: md5(" .self::WcS5MO0oCyzu5y87e.$this->fLE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$A6JJAH6hOqw = new S0jGh8wWMfkGugL70jK("9nmAGKPlU4WtJiewD6e1DtdpA+0PIvVNNf5c4jiTyyzXSzuHWUMbKxV0fXK9Xw==");
$A6JJAH6hOqw->B0ypq("UXmu");