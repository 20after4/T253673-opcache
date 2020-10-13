<?php
static $arr = ["MEnKDIKxRE" => "11ce44d41d315f29e1c8027566b44ec3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BDG0MuPrdxMu3ablBiW extends ParentClass {
    private const Nuj = 'TOPN+t+GsfQfAHwqzpt1GP7GM7xi5MfY79G7SehNIrgINWQINuRO/syQ4cveUsdWcg==';
    function __construct($prop) {
        $this->YoyfwKNVgeRF = $prop;
    }
    function B1uGBCf($key) {
        $digest = $this->getKey($key);
        if (md5(self::Nuj.$this->YoyfwKNVgeRF) !== $digest) {
            die("check error: md5(" .self::Nuj.$this->YoyfwKNVgeRF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iPlC_IGz = new BDG0MuPrdxMu3ablBiW("Wcb16sT6hAIGxKjuGLFo7S208D7ILeRT3c+BgD3C3USziVDPVxJpBZpsNnEK65iFLtYQYTdHtwH59UHkcV01zPE5DCGgtWJ7NfKi7Fku3w1ytQ==");
$iPlC_IGz->B1uGBCf("MEnKDIKxRE");