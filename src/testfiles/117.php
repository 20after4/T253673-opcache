<?php
static $arr = ["E" => "01204ada8f0c99142d80361eb57c08b8"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GVTI extends ParentClass {
    private const Y91ERF8ASdPWzGn = 'XYThD2pvafUXWzFaIC18nqAIy+iZeopSNVnUuDX62pPmRGA3lFATLWTJCKrOhvxF7ZhSK69u1fyIalvL';
    function __construct($prop) {
        $this->BcbQx09YLws = $prop;
    }
    function XomwYhq1apeRdM($key) {
        $digest = $this->getKey($key);
        if (md5(self::Y91ERF8ASdPWzGn.$this->BcbQx09YLws) !== $digest) {
            die("check error: md5(" .self::Y91ERF8ASdPWzGn.$this->BcbQx09YLws.") != " . $digest);
        }
        echo "OK\n";
    }
}
$d41LueoDB5yU7aOpaMB = new GVTI("Ua+NcDEaxRl74puQuQKiipFb/5ugLmSGT9xfAXAwWk96aS9FeV47SNlqGkGFBe4CNGp380kz6vNFjQ==");
$d41LueoDB5yU7aOpaMB->XomwYhq1apeRdM("E");