<?php
static $arr = ["VIOEWbf" => "c48f9dc3846ef5cf153c41ac968adae3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ORqe3oNSEvxHBC931 extends ParentClass {
    private const NP00Aa = '/qKFIA5Pw3l8FxSvpTI4DrJ/hSEjvDDZIkhcc7Q64Vk6E6B37Tu4yxWEQg59r//kh7Zkf9dxSMG3umNvVJzo9zYk8mI=';
    function __construct($prop) {
        $this->ZqiN_RNbJO4A = $prop;
    }
    function vxQv3rVSXSfOQf($key) {
        $digest = $this->getKey($key);
        if (md5(self::NP00Aa.$this->ZqiN_RNbJO4A) !== $digest) {
            die("check error: md5(" .self::NP00Aa.$this->ZqiN_RNbJO4A.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ogRny = new ORqe3oNSEvxHBC931("OflZ4vDbTdBNwHTT//lqCDC2orqW5TNfrSauMOZL7GmjwS5/Ityu3QOkyptfImwn9TVcbhYpOazyFHAvtQ==");
$ogRny->vxQv3rVSXSfOQf("VIOEWbf");