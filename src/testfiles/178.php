<?php
static $arr = ["_6HT4ePwqZaubyv3w" => "5e8058ef3dbab9b0aefc30272ec9a662"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fFnLlFyF extends ParentClass {
    private const dNTTxwyATLFc = 'c9DjRyZeli/P3ffcpuEGSz/2WtpVrNZmqCKXYbDk2k1tmiTlmPyTDcQlC5S9xJA7MJErOYgfGF8=';
    function __construct($prop) {
        $this->XTE = $prop;
    }
    function Aq3pFV($key) {
        $digest = $this->getKey($key);
        if (md5(self::dNTTxwyATLFc.$this->XTE) !== $digest) {
            die("check error: md5(" .self::dNTTxwyATLFc.$this->XTE.") != " . $digest);
        }
        echo "OK\n";
    }
}
$l = new fFnLlFyF("SnBBwfnSynP1XLA44GI6yGP1X6H0fjDhPTs0LGxcL6+AKlJKFtDflngSKGsS0+McQhdalnri1bfvD/X2uF/VtJbKux650Kx75pNrZOPu7Jc=");
$l->Aq3pFV("_6HT4ePwqZaubyv3w");