<?php
static $arr = ["Qb668x6cX2sBVxDsX_I" => "480ea47afcbbcf06aa1067d47b05384c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Pgp8kwggUDu extends ParentClass {
    private const qI576L0Ac = 'EcLlFx3IbeLIn7DwhzSCuf7ru/URDztu';
    function __construct($prop) {
        $this->e3JOypxquBQ = $prop;
    }
    function Md($key) {
        $digest = $this->getKey($key);
        if (md5(self::qI576L0Ac.$this->e3JOypxquBQ) !== $digest) {
            die("check error: md5(" .self::qI576L0Ac.$this->e3JOypxquBQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xA = new Pgp8kwggUDu("m1Tc6n0Qr7YQI4FIpDVuk6C8w4JWsp/QVTvKMVpClzCcQNSXwx8gQz5fbDEMQPCfkU49Lugf");
$xA->Md("Qb668x6cX2sBVxDsX_I");