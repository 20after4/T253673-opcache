<?php
static $arr = ["hTPIgJCTU" => "93b828de6307f663ae609b3d17b998e6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kxUVtu0D extends ParentClass {
    private const LU9kVXaCR1ESEjFXB9W = 'iqVZzXdRzgwInHkAHn8SSVmu8GIKC+WVjUBdgOxDPEUinn7YoqPetiHgq/eLBym7U9Xlo3OoCw==';
    function __construct($prop) {
        $this->WQ = $prop;
    }
    function eO0uhwajyP5Ht($key) {
        $digest = $this->getKey($key);
        if (md5(self::LU9kVXaCR1ESEjFXB9W.$this->WQ) !== $digest) {
            die("check error: md5(" .self::LU9kVXaCR1ESEjFXB9W.$this->WQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bNb = new kxUVtu0D("7ycPmes5fwhEtGCzGJJ1KM+2CLY5kbOBoXs3y9dqAU04OZPQ7pDoCczI3MC9IHBbjX7H6UaX+A9JUrYK7E2Qe6zRTk6Op22mBUQSl+oNRlc/2cl2");
$bNb->eO0uhwajyP5Ht("hTPIgJCTU");