<?php
static $arr = ["UEiSGOmSSDZwGH" => "8384d2c5cb17f85a66b13e5fa843ecce"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class IavoG extends ParentClass {
    private const gXgK1 = 'Fe46BfZBUua6zUKiaA1VxbCFsx0f4/S4c2InhAs=';
    function __construct($prop) {
        $this->SbaLzTc_WTHL2qmRjWV0 = $prop;
    }
    function YqdGF_BRhN243naO8b($key) {
        $digest = $this->getKey($key);
        if (md5(self::gXgK1.$this->SbaLzTc_WTHL2qmRjWV0) !== $digest) {
            die("check error: md5(" .self::gXgK1.$this->SbaLzTc_WTHL2qmRjWV0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BBMBP2a729wtJOewP = new IavoG("yvV9FNbOBolBIoMPOpntA1dHrIYnkimKeAAqUKIel/rxc8n39YB7zFZ47+733wWd1mrP+RdcMxu/ChoBPW/R/lj+tBRUIH+T2vEAx01MbWDOh65/Izc7USQYoDsG");
$BBMBP2a729wtJOewP->YqdGF_BRhN243naO8b("UEiSGOmSSDZwGH");