<?php
static $arr = ["MKvEIfx8M" => "0753b90d48251ddc8fa7aac4ee6f97f7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SsposAIMeXy94j0hRK4 extends ParentClass {
    private const CDFQW8 = 'LMLUwNtTS/E7vSrrpQ2x76qM+NehUjvXtcMJcJk5uA2EqCY7mvvbNpkf4SChfv6k50gb3vD15f5dn67sjSVPSqI=';
    function __construct($prop) {
        $this->p = $prop;
    }
    function T5wt4MNPo($key) {
        $digest = $this->getKey($key);
        if (md5(self::CDFQW8.$this->p) !== $digest) {
            die("check error: md5(" .self::CDFQW8.$this->p.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LGwUNJkHfaMJvXv = new SsposAIMeXy94j0hRK4("jqxNCOyYtxrHSyxu11mOLEyY33tYE3YLCiyp1fpFZs8uUksi70GPRQ==");
$LGwUNJkHfaMJvXv->T5wt4MNPo("MKvEIfx8M");