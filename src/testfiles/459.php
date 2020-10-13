<?php
static $arr = ["eGvjIGPymENxuLfT8" => "d705cee51b74dab77465579a295b4e40"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HGpcIVo extends ParentClass {
    private const MI4hbxtNNDYPqt1PM0 = '98YBpcGv4tk4dmqTYOYMSfHNFfc4PK0NgqN+7sjCa4hhtx277KgFHx7vdQ26tex/BqgJobO5iBhyD8cubl0t';
    function __construct($prop) {
        $this->z = $prop;
    }
    function CuIulzbt($key) {
        $digest = $this->getKey($key);
        if (md5(self::MI4hbxtNNDYPqt1PM0.$this->z) !== $digest) {
            die("check error: md5(" .self::MI4hbxtNNDYPqt1PM0.$this->z.") != " . $digest);
        }
        echo "OK\n";
    }
}
$w = new HGpcIVo("wfPqftX35YMsbwQDR9bxzZmSWgzOMAVRpCOwNt7tbpqQKb6shnrERS+FEVmDc8CSXaRGZh4MEZaDmDZhUjVazyzfrlBfLXbFm+g9XhQiKQfv0V6QYin1+Zi5OrMvElG/WIM=");
$w->CuIulzbt("eGvjIGPymENxuLfT8");