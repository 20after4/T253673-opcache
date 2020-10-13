<?php
static $arr = ["YTMDYYx2des" => "6645fb1cfd268e03a59a0cb57cbd2ab0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S6WlNNN3FBtHon extends ParentClass {
    private const yGWZAdGE2 = 'ESYs3ki8040n9Q2Dc/2LY0G/uqglo/q4oalVJFyiJLVGLuuxTpPyzvv0jW42KVQonS3ARvvsnRRTYHjYqatiPKtH08PpgV9CrUrNr0uSfrF/H21CLtFJWkqI7Fo7';
    function __construct($prop) {
        $this->N_s0C1YV = $prop;
    }
    function x9bwiJKA($key) {
        $digest = $this->getKey($key);
        if (md5(self::yGWZAdGE2.$this->N_s0C1YV) !== $digest) {
            die("check error: md5(" .self::yGWZAdGE2.$this->N_s0C1YV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CK9QkWRUQak = new S6WlNNN3FBtHon("eOi9taGCzO+LvrIMceG6qgEBr3mVlyKvp/vDBb65AbqshQ==");
$CK9QkWRUQak->x9bwiJKA("YTMDYYx2des");