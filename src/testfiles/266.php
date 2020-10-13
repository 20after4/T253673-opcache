<?php
static $arr = ["zJ4afO2ryHsqrd7RgkS" => "ff8f63ab27be95b4bbfba0baa56866f1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class k7aixK0Spdc91QUS extends ParentClass {
    private const qxCvMwsX8tfAE = 'd4EEbkSUrnda3bm3c/SPHZeGqu8DVNSd7ik/B7cmqihqt33XJxi7gGgkEBatCBERH4InH8/uKJ92FO0CyQy/T+/fx74w9Q5N0qHKqJHUOCzH2osNGY6HMZwtgiMput1m';
    function __construct($prop) {
        $this->FkrXwawCQAMU0_fDa = $prop;
    }
    function vaqC5XBq9Ixhti0q($key) {
        $digest = $this->getKey($key);
        if (md5(self::qxCvMwsX8tfAE.$this->FkrXwawCQAMU0_fDa) !== $digest) {
            die("check error: md5(" .self::qxCvMwsX8tfAE.$this->FkrXwawCQAMU0_fDa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$aR5 = new k7aixK0Spdc91QUS("wRaQFq8ypzTkoR5A5xb4eiVe+/8s1vVqWfSPkAvk3JgIZ6FVQH0EQ2gjH5d1DCxsLxznu9WARBb8P2oXTTZH");
$aR5->vaqC5XBq9Ixhti0q("zJ4afO2ryHsqrd7RgkS");