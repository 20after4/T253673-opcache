<?php
static $arr = ["S7" => "3bf8161920a313f1f71b9e474dfc3ad7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L5ChdRMZHzLu extends ParentClass {
    private const yE5Ph02utpjcOxVBu = 'SZtmAa1VRwv2bAG6sHo7cXN5BNso';
    function __construct($prop) {
        $this->Om5t8s = $prop;
    }
    function eB7TnTD6($key) {
        $digest = $this->getKey($key);
        if (md5(self::yE5Ph02utpjcOxVBu.$this->Om5t8s) !== $digest) {
            die("check error: md5(" .self::yE5Ph02utpjcOxVBu.$this->Om5t8s.") != " . $digest);
        }
        echo "OK\n";
    }
}
$RFwwFtwgSsDVon = new L5ChdRMZHzLu("fs+lC7lP79vfgBBz5EUlnJj1AT15tBoctCdFmRPM6qYhTDwyo3aYpgTxpV1ZNoB3JXwFXWLXbuBI88dgKnaF/buLLlcWGxaFSVIjP1gwrSJMjV0ik4WM");
$RFwwFtwgSsDVon->eB7TnTD6("S7");