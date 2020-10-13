<?php
static $arr = ["nbB3Gy" => "583de976e526a42d788c96f183b81368"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iU4GqtmTMyeJsRD47Kl extends ParentClass {
    private const RtylLwkGCAX3O = 'zXL68qrgkh7FIDZ6APGfK6pmW5A2iP/nZ7KCGxBREa+3xeZD/wqmyX4IUmY=';
    function __construct($prop) {
        $this->SdrsaRyXvmBiFg = $prop;
    }
    function UrL9bV($key) {
        $digest = $this->getKey($key);
        if (md5(self::RtylLwkGCAX3O.$this->SdrsaRyXvmBiFg) !== $digest) {
            die("check error: md5(" .self::RtylLwkGCAX3O.$this->SdrsaRyXvmBiFg.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zHYL_PtHaC3176tAs = new iU4GqtmTMyeJsRD47Kl("YzCXeOJtPLUaR2rvfd7fGiwKkFJN85oC");
$zHYL_PtHaC3176tAs->UrL9bV("nbB3Gy");