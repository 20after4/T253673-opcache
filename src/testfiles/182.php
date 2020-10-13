<?php
static $arr = ["_h8uOKxf_" => "71f4b64a6ba2d1b2918b0603f6be145f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class tKSkTdV_fvoztTmaujR extends ParentClass {
    private const cN2tj_IPAx1buwfNS_Uy = 'JkHUyLfl19lrue9HBMYNnCRJ60zOmjMyLjSwKmEy17PUkDJiDu2QyQfKd3HvdiwMOefFmSQBx4ecXzIul86f';
    function __construct($prop) {
        $this->FzeOAgMp = $prop;
    }
    function ocw($key) {
        $digest = $this->getKey($key);
        if (md5(self::cN2tj_IPAx1buwfNS_Uy.$this->FzeOAgMp) !== $digest) {
            die("check error: md5(" .self::cN2tj_IPAx1buwfNS_Uy.$this->FzeOAgMp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bEwQ6zpiZAPJgoi = new tKSkTdV_fvoztTmaujR("56Ac1ymBhI48xjd1hf/Vbl8Zzz8gi/GldJUBhwSQrsSTmbN7ChIcbSuLZ8CMJIwzjvaw41uRnRfc9VDj+H9eWefRm17o3f50wkcG4ifLOA==");
$bEwQ6zpiZAPJgoi->ocw("_h8uOKxf_");