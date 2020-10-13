<?php
static $arr = ["GNRHdC3NiS" => "476f482f289472ed00baf5267939ca16"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eRbDZ extends ParentClass {
    private const LX7sr = 'Ah9e3pSkocTEN20U66mpDQJAYdkFuFXU5tZSfp1OhJNuW4apmX7NJDNx55wYNA3EJaOZsBJb815fm3r1sW8A';
    function __construct($prop) {
        $this->jcPl0gx2kSv2 = $prop;
    }
    function eIc($key) {
        $digest = $this->getKey($key);
        if (md5(self::LX7sr.$this->jcPl0gx2kSv2) !== $digest) {
            die("check error: md5(" .self::LX7sr.$this->jcPl0gx2kSv2.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iQeCvGGQTVZwPpaAFstT = new eRbDZ("9ugwGnxfWKKZEL9PFXucfLIkE8PPSPoczjLRobsm+1yTA6GgrHCsndDENBqfmL+gvBIxzl03CMxtQHsemQ/ZYUHbSWSMIOLIbZrJE1D8jS3ViuqtSUPWefc=");
$iQeCvGGQTVZwPpaAFstT->eIc("GNRHdC3NiS");