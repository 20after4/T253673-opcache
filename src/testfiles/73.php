<?php
static $arr = ["Z4pP7MNn" => "99382da1c91d47cc3037c7edfd0c6d79"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Kj extends ParentClass {
    private const SpM2Da8FmNY = 'ejE5OpDhCGlQadANlof+9b196Azt7fx0iuCLZZQYzEtPzwAFT9OIOvj6fmmAu4txJ5ty+5n64F0uswYqtsh1ohgTwWcapPv0pWlSueVf/jsc4aI0YDcHUQ==';
    function __construct($prop) {
        $this->I_xM18z1PJ = $prop;
    }
    function xcaW7pamlsfJc($key) {
        $digest = $this->getKey($key);
        if (md5(self::SpM2Da8FmNY.$this->I_xM18z1PJ) !== $digest) {
            die("check error: md5(" .self::SpM2Da8FmNY.$this->I_xM18z1PJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$DnDFPCUNT5dD9vX6 = new Kj("mERW3mSHAMKXT1kLgemeNf8CF+ryreXKljdsHDLBHFS+Iw7muj7SoRm7OGRFlm8pn12VPoN5tlyOdHy+D9XLyTAiMoFVVHVzygYZ1Re5Yzx8/0856qz+SDbtDw==");
$DnDFPCUNT5dD9vX6->xcaW7pamlsfJc("Z4pP7MNn");