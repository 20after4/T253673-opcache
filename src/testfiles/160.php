<?php
static $arr = ["IZOAJ" => "82c645df1c1455597709efce1635c561"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZX3VHiyJDZ7y extends ParentClass {
    private const Wt5yu4s1QSEDVJiI5 = 'Utc79k5f6YayUK3kuBgjUtP5kg7n2sqECrdOgL9DEvFqbyI=';
    function __construct($prop) {
        $this->QFq_K2eu4FN7olsFqi = $prop;
    }
    function kCs1tijL($key) {
        $digest = $this->getKey($key);
        if (md5(self::Wt5yu4s1QSEDVJiI5.$this->QFq_K2eu4FN7olsFqi) !== $digest) {
            die("check error: md5(" .self::Wt5yu4s1QSEDVJiI5.$this->QFq_K2eu4FN7olsFqi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MalDT2Gn9s13Z = new ZX3VHiyJDZ7y("Fb1cAxyzqM25Yfl/Ezk13+CvPKFc108xuU3UD1Eaof4B2mftPBiZO8IH6qZG/jc7sZu5zVxPKF94ARCBe2kykrEtlJqSpv7EQjBEXg==");
$MalDT2Gn9s13Z->kCs1tijL("IZOAJ");