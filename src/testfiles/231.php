<?php
static $arr = ["Pjw8qdaOd15RgAK0nP" => "31f2b3b3498f3ef36132fd113c8394f9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class b7ZPtItF2AXrKzn extends ParentClass {
    private const ovMvIN4tMvfKTEOlHg = '4cUUJunGIWVPj0cvMnaJrKbNew==';
    function __construct($prop) {
        $this->QjCnPyRDf7 = $prop;
    }
    function Uiur($key) {
        $digest = $this->getKey($key);
        if (md5(self::ovMvIN4tMvfKTEOlHg.$this->QjCnPyRDf7) !== $digest) {
            die("check error: md5(" .self::ovMvIN4tMvfKTEOlHg.$this->QjCnPyRDf7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bQ1MVf9b_wfjwz_iFlEX = new b7ZPtItF2AXrKzn("pv5ay1HcBme9ZJCGw+1SSrPJyPzqshSBBL72e885EgtHk+U3IQ==");
$bQ1MVf9b_wfjwz_iFlEX->Uiur("Pjw8qdaOd15RgAK0nP");