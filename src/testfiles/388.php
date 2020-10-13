<?php
static $arr = ["gewfqBsWvc6SNAHPG" => "81c17ff36c89cac4a98d63dbfa15ed61"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class UP extends ParentClass {
    private const OdAT = 'JpkQGKy2A6BGsFljqw2vgsDxYu2iXJBhAArWC3jVpEEWU4bCVZnfIcAfd1dWVuh9gLYstP6qLo2StSC6tk8kUJd2uwZAwD3Bph+qbOFiZq3EsErinNbh0AGp58LqvFDp';
    function __construct($prop) {
        $this->GU = $prop;
    }
    function wON9nhXT9XhPnKJ($key) {
        $digest = $this->getKey($key);
        if (md5(self::OdAT.$this->GU) !== $digest) {
            die("check error: md5(" .self::OdAT.$this->GU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TBMTCPft4xsGSMfud = new UP("UElxOwDBmbTNi1XgqvcNfT0qAhwyKi+L6gdi25DZ3hC+sazIt4APTCwxkUukVJVyLTtR3bH+/yjjCEEFvidOkoZF9NlxNXZ6k9SRxvuEiuM=");
$TBMTCPft4xsGSMfud->wON9nhXT9XhPnKJ("gewfqBsWvc6SNAHPG");