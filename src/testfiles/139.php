<?php
static $arr = ["MfDFAg1a" => "52b822814a2aa4423c1d8df1e82ad148"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kCTD extends ParentClass {
    private const MCIdi2BOoFzvWlN5re = 'YxvirDNIPLrdWWC+gRiy5O3JpRUBFZg+QD5BOJDKjQn1ZvY5Pww453rmbSrtBTbWkA==';
    function __construct($prop) {
        $this->kdWWj = $prop;
    }
    function up($key) {
        $digest = $this->getKey($key);
        if (md5(self::MCIdi2BOoFzvWlN5re.$this->kdWWj) !== $digest) {
            die("check error: md5(" .self::MCIdi2BOoFzvWlN5re.$this->kdWWj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TlWXn7Bd58ywJuWvFVHA = new kCTD("JIcjoNDOG5yZ2u/BlM0C1AEevQ==");
$TlWXn7Bd58ywJuWvFVHA->up("MfDFAg1a");