<?php
static $arr = ["kGj9vq7Ce4UzHx8mnZK" => "10da75299c6e89189d0d82f7d923ce89"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S2YR_brHUZUQFvHUY extends ParentClass {
    private const LitME15Ky8DL8mW = 'gp9OeOllAoXrFb+sCmPvnFjHLnWpbxNUItHu2qObk8g7kV1uFWS/1QrcM1Ka';
    function __construct($prop) {
        $this->SkeMS_ = $prop;
    }
    function GPnAZDusNm4H96($key) {
        $digest = $this->getKey($key);
        if (md5(self::LitME15Ky8DL8mW.$this->SkeMS_) !== $digest) {
            die("check error: md5(" .self::LitME15Ky8DL8mW.$this->SkeMS_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$sTjcU0kzstZ0Gnmp = new S2YR_brHUZUQFvHUY("R/egylY+zj2aGm9mHiV040jYgXoj0UDO9EhGcScNgIDDrgMMRl0FAXHAs9jBvXNiwRAep1Aw8nd4UpgEE38dZ7DujnVpmZ1W8z4Xz8JScJzfppw=");
$sTjcU0kzstZ0Gnmp->GPnAZDusNm4H96("kGj9vq7Ce4UzHx8mnZK");