<?php
static $arr = ["qKw5al6VfeTa3" => "c118d82f876488f2e5b828ce57907bb6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eWZ1B3UklaJhcMzGzM extends ParentClass {
    private const aRtD38vImQb5zYtmVsYN = 'TEoBnAd6sjZtJqiBLmFZUcHIjELO5iulnVijF+nqr5HAY0Z7CovT1qz5+PuC/2ELPi+JzhjjpYg5ozCq5L7wGhNDCwU1sfkzuxWFPCPdJviLz96nK31hiQw=';
    function __construct($prop) {
        $this->h4hKDB677 = $prop;
    }
    function sjA6QE_at5YrtmT0R($key) {
        $digest = $this->getKey($key);
        if (md5(self::aRtD38vImQb5zYtmVsYN.$this->h4hKDB677) !== $digest) {
            die("check error: md5(" .self::aRtD38vImQb5zYtmVsYN.$this->h4hKDB677.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cyvxoZ9M5FaeC36neR_g = new eWZ1B3UklaJhcMzGzM("Kv2t6E2UQ7VLEanEmcvs3lNdhFCDDbtKXEoyRHCIweEefbWw5X1k");
$cyvxoZ9M5FaeC36neR_g->sjA6QE_at5YrtmT0R("qKw5al6VfeTa3");