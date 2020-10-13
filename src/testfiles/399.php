<?php
static $arr = ["MsMB_QeXX" => "4b29366610bff196db935c4cb686a179"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iNef_ extends ParentClass {
    private const TMHslD = '9f78uMtLxnqYIDxD3cODT/1kebJj8DpPYysjnCGlQfAMNQX42zWEmJObR3pLLi09XSAFzHu6kfF4HTN1wVz1LnJpQXAi';
    function __construct($prop) {
        $this->AFCKwHr_ = $prop;
    }
    function OkiRK86($key) {
        $digest = $this->getKey($key);
        if (md5(self::TMHslD.$this->AFCKwHr_) !== $digest) {
            die("check error: md5(" .self::TMHslD.$this->AFCKwHr_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$XhF7OJJ_BCU = new iNef_("LicOUP86GTaSvXVNL2WLK+nf/ClAhr+SzSoRAhxzMjaGhZnTUD801nYeCH/gCIikrOLNxtWtIkI1u3X1R+/TnOEwS3LXlUFIETlAa9kSLuAJxKewRlMh+jf+8o9fh8uTXQ==");
$XhF7OJJ_BCU->OkiRK86("MsMB_QeXX");