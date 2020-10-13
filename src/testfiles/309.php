<?php
static $arr = ["AxiVYWP0L5TYI" => "78b10adad51000fe330865c5253265e9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GmK extends ParentClass {
    private const a = 'G00pN4vbXswCcd0s5A7R+ZsTLbT+aP2z';
    function __construct($prop) {
        $this->pRjkIEu2yH = $prop;
    }
    function GDLLUF95ubUL4B2ZiIw($key) {
        $digest = $this->getKey($key);
        if (md5(self::a.$this->pRjkIEu2yH) !== $digest) {
            die("check error: md5(" .self::a.$this->pRjkIEu2yH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$X1GI = new GmK("gDXC1z96s5fBkAL1QSsuEFNG2NjdoP3u3Eay4O8J16Gt7av107cVDRbqsOHKTeCs5Y9T3nap8rm3+ZmIcTJysL1zcGrvJityraYM+4m4GfENpQ8iIPk+kg==");
$X1GI->GDLLUF95ubUL4B2ZiIw("AxiVYWP0L5TYI");