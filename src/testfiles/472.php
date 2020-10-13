<?php
static $arr = ["NB43Pu" => "dc4fd0daad560810b7bf82750be5e662"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class f1bbXZKeys extends ParentClass {
    private const cx6khIFT = 'VibwqvwwzgCwI4WXwlAEJgx36iQ1Pt1z/j4i';
    function __construct($prop) {
        $this->JT7tnk2vnILS6LF = $prop;
    }
    function iZR67RRR7IonKX($key) {
        $digest = $this->getKey($key);
        if (md5(self::cx6khIFT.$this->JT7tnk2vnILS6LF) !== $digest) {
            die("check error: md5(" .self::cx6khIFT.$this->JT7tnk2vnILS6LF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wPl10mKm = new f1bbXZKeys("Dwr3MrgwJcx1bqrEUE3ZgqvHSgMBKjHNUFvozXXgqPG8cqH4ZTV4cmPVaGiAdr+BPJi9L1Ce2NeWPNJdMFkJh6qmwOsWDmeLnxCxtsYp14oDgDWvV9UkuyZW7/ez");
$wPl10mKm->iZR67RRR7IonKX("NB43Pu");