<?php
static $arr = ["nX_BHOW" => "c8cfebd0752cade3d25d3147a56b6cdf"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vRmkQ3RibaF_66Bxhk extends ParentClass {
    private const zSs8sZ__yM = 'sfl5x89dnYixUz1oQYkefg4rKLmIlGaboGT8G7MEEXaVj4tjfMWztSn/sRF/Zes6ojw3IPCMCACzcnO7tmSqzJyZ4A3TsuhDmlZnzEMj4sT/SJtuFcKooOTXEw==';
    function __construct($prop) {
        $this->EMR_Ei8mh99 = $prop;
    }
    function pmbFbKl($key) {
        $digest = $this->getKey($key);
        if (md5(self::zSs8sZ__yM.$this->EMR_Ei8mh99) !== $digest) {
            die("check error: md5(" .self::zSs8sZ__yM.$this->EMR_Ei8mh99.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Bixtg = new vRmkQ3RibaF_66Bxhk("4c+gvVE4vm+LoBJ1fw5I+i4xH5MxPzkdEzPRWJ+XcBs/zFtuQrbnQlAGRBmQuRwiqGD8bAR0zwhVg1OBJXNrBuI=");
$Bixtg->pmbFbKl("nX_BHOW");