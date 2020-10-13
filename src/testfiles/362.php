<?php
static $arr = ["J" => "071433fe0d3f40e91f20faf4eaebdda7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SmKvrI1ASDQCfruo3z extends ParentClass {
    private const ZVgbhRGfGcRMzB = 'hEOlRiSUUzWAnthfB8IwGuJ4X9al9v/EcFFcYcGkb8FHhWPGMIapQSHh7ZsqvEK9gFpnc7Y9Io8D4DMs31qhgKyxz+d9T6xdAgtS15yalo/X+mzOKzijJBo=';
    function __construct($prop) {
        $this->u6EkA6ZMPcknBUoWkw = $prop;
    }
    function cCGSpKQn18($key) {
        $digest = $this->getKey($key);
        if (md5(self::ZVgbhRGfGcRMzB.$this->u6EkA6ZMPcknBUoWkw) !== $digest) {
            die("check error: md5(" .self::ZVgbhRGfGcRMzB.$this->u6EkA6ZMPcknBUoWkw.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Immrf28dn = new SmKvrI1ASDQCfruo3z("AxgurbQvrBPZlGzW2Vdl3T6uEgSR5/x8UhULApwxsvloScZAuA+Pm3cA/veq53hn9URyRiHoJR0J");
$Immrf28dn->cCGSpKQn18("J");