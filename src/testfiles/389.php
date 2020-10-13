<?php
static $arr = ["r1m1CHljolqxOho" => "50b8bf86dad7f5197ee03a1aa705554f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XAveja extends ParentClass {
    private const yhO = 'Zoq4fbvYRar75D0SH1nUhIbcNLrMe2pCniuF7P4IGk902vQxPVpGphVsZVmPTnD9HMldBsnWw/38QnJGbGwUTQ==';
    function __construct($prop) {
        $this->easjXuU4 = $prop;
    }
    function N59bVC47NgIDT($key) {
        $digest = $this->getKey($key);
        if (md5(self::yhO.$this->easjXuU4) !== $digest) {
            die("check error: md5(" .self::yhO.$this->easjXuU4.") != " . $digest);
        }
        echo "OK\n";
    }
}
$h2dPFj8ycD6xmAXrOE = new XAveja("31Jr5Fox6EOjFFc7y6JWYo2m0xUDB4XG3fjyLXSz1/6H7lUOgiuwWNUD0oERJvKmUMj31750GtOJihEkd1r4BSRdThFN1Tzjr6j0LLw=");
$h2dPFj8ycD6xmAXrOE->N59bVC47NgIDT("r1m1CHljolqxOho");