<?php
static $arr = ["iUgHJpW8n9uUSt" => "5e08451fb30e49b70f023690632a1b85"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YMwUXXSl3_eulm6 extends ParentClass {
    private const o1OrzOYC_T1wQTc = 'EUuvHP466hNKfhjfiVpee+Gror3ZDVBjM1w8Jfi45kH99SLguGe5ToiK6RBGzDOVCG7OP0TXVxjfXsgjF2I=';
    function __construct($prop) {
        $this->G6CAOYN = $prop;
    }
    function VOYAByRKPmX0D4FDvdx($key) {
        $digest = $this->getKey($key);
        if (md5(self::o1OrzOYC_T1wQTc.$this->G6CAOYN) !== $digest) {
            die("check error: md5(" .self::o1OrzOYC_T1wQTc.$this->G6CAOYN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$UmryRwRFgAH = new YMwUXXSl3_eulm6("qEQBCImEc4FVc+WEi9kxBniY6flsQz5J5/RtObLUjETkQcBTCwerTE+wHfOshI5hs//OfP93BmdfubTEOotzayW5TQ==");
$UmryRwRFgAH->VOYAByRKPmX0D4FDvdx("iUgHJpW8n9uUSt");