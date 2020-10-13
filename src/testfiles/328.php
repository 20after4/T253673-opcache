<?php
static $arr = ["bGpLoaRp8t" => "ad1f43f23c9dc2e200de69eb7d4fb40b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class z extends ParentClass {
    private const iNMAgwUR2 = 'A9giHa6TohY/6XC/V4UAJ+vV3c73GyuzMo5PgQPFHqO2P4a2h8Ym5QE3w6VWynUf1RfOBjE2WTqRiD83pd/h2OUOn/G7sYvTClTNTDnUjEEo';
    function __construct($prop) {
        $this->daE = $prop;
    }
    function LTANowamwgNBEGJrMI1h($key) {
        $digest = $this->getKey($key);
        if (md5(self::iNMAgwUR2.$this->daE) !== $digest) {
            die("check error: md5(" .self::iNMAgwUR2.$this->daE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$D3mZST7fzBcrTmJ = new z("tM5RUg92ri9P8mjQ/0Rrn5G1fds5wWSA4SvROro=");
$D3mZST7fzBcrTmJ->LTANowamwgNBEGJrMI1h("bGpLoaRp8t");