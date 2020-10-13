<?php
static $arr = ["Wo4_eB8kka8LoCN53ej" => "56c06efddda6cc79a130f671fd259942"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class R3 extends ParentClass {
    private const ZmkXh5mf8lpoD9hP = 'I3ifIvx5YFBSb6PjRPCVMudsY9W8lGsYN3q+S3L18hHss63sE7ZPSNKnQGOEwXDEqn6Nkj/NDn8Br/4=';
    function __construct($prop) {
        $this->JqWZnmVA8Sdwvp8hZSH = $prop;
    }
    function zh($key) {
        $digest = $this->getKey($key);
        if (md5(self::ZmkXh5mf8lpoD9hP.$this->JqWZnmVA8Sdwvp8hZSH) !== $digest) {
            die("check error: md5(" .self::ZmkXh5mf8lpoD9hP.$this->JqWZnmVA8Sdwvp8hZSH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gcNC5J4M6tk9E2C = new R3("kQ0HLxQrtx3HIvGoOMqTCDJL0UWpROF3sAavZEZikmuqlFacqU3tkJrKLd5czHquahAlbpOSm3Mhl5dR4IMK6RUBKcqq4BHj");
$gcNC5J4M6tk9E2C->zh("Wo4_eB8kka8LoCN53ej");