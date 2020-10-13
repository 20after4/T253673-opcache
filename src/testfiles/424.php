<?php
static $arr = ["MYmEAu3bxA0LolFfYY" => "a2fd5484b5d8487d95dac19d901ac6af"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class zJdwHRK8BklfHh3 extends ParentClass {
    private const YUWezNO = 'yfG0zNej8D51677o9VHkhKSc5SK4R8PxXwXlOtmTQ7zcq/R6T25Lb72iI/amyI28m0/tdpwRTglxmKZIUplB5029oPAyg2RV5u50HdjRpJPhiLHzPkqELlhFF99nAhL+gQ==';
    function __construct($prop) {
        $this->C85mMc = $prop;
    }
    function Nsca($key) {
        $digest = $this->getKey($key);
        if (md5(self::YUWezNO.$this->C85mMc) !== $digest) {
            die("check error: md5(" .self::YUWezNO.$this->C85mMc.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GPMy2JDFVVisDsZ = new zJdwHRK8BklfHh3("YmP7JT/vmU6ZYEA1s0vpBc740zT3WXEbGtNCvyXJ3+n98o5xrvfbZBhaCJPzC1vygxW75AgkXdyvooO3op8cYg==");
$GPMy2JDFVVisDsZ->Nsca("MYmEAu3bxA0LolFfYY");