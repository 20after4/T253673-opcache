<?php
static $arr = ["aRvDRWo" => "92b8cc60b5069b08ba28a77b7078e01d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jjJaOixvfk7AF extends ParentClass {
    private const EeCYEA = 'AMCJ/5pY21Wee/zx6HjLiJDwPV+ZQH9trROuAzDoDuvvUvU4RdPEljqIRW23KGIwYlxoZf/9Jbr/PcbyICJyQ14t5SVkBiNuGuZNx/0d5Is=';
    function __construct($prop) {
        $this->z0xRB4EdHOHrjw_tOF = $prop;
    }
    function Hi0BYF1tRGoSrgwz0tx($key) {
        $digest = $this->getKey($key);
        if (md5(self::EeCYEA.$this->z0xRB4EdHOHrjw_tOF) !== $digest) {
            die("check error: md5(" .self::EeCYEA.$this->z0xRB4EdHOHrjw_tOF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$nzCloY = new jjJaOixvfk7AF("r/VYLe2iCg17cYZPblLdH90SpHTPOhVT2NrNMJWUriFkoBqCkv8DA/ENtm8aiX68s0/Yo6HeTnZByQgbWLR5c6a4");
$nzCloY->Hi0BYF1tRGoSrgwz0tx("aRvDRWo");