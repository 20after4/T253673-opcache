<?php
static $arr = ["CJBB7psr4oQQOpoN" => "c2b7baf013b2f09d195773cd631ce88b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class pGUq4UBmsjU extends ParentClass {
    private const y2 = '3ANuxAnIeiUj1PKoGJc25RhTtx88vMfzlgK/PqfacyT4sPUCL9AGEG33i7fTVEVrfswlOaDKgfaoYmENOglL';
    function __construct($prop) {
        $this->G384INiYK_Wf = $prop;
    }
    function H9bklXpx7my($key) {
        $digest = $this->getKey($key);
        if (md5(self::y2.$this->G384INiYK_Wf) !== $digest) {
            die("check error: md5(" .self::y2.$this->G384INiYK_Wf.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OJm = new pGUq4UBmsjU("ux72BBBVDUO9xRq/oByI5paOk5mbJJ3ZID/x5egSs+sr/Bhlgkgw3s74lt+Gv57/M8EEgmhdu9JGZdYqfDEjf+jI4EUlguebFZYXZy3+XXvt3Q==");
$OJm->H9bklXpx7my("CJBB7psr4oQQOpoN");