<?php
static $arr = ["hmATuzUdRtDh5" => "589f387f7698632b651e4859cd8a4c62"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QIbFOL3mLSj extends ParentClass {
    private const qKo1ZFe = '6jOFbaNvBxD+9yP74VvDFyvgAP4sEsPGsFGCSUY0GLoIpdfh5kR4AAC2/SewT3Lk7lIoF6dlX9mcuQfEz1ypm1iWlIQ8qXXgB9r9mbtGGIj94DnCP8mfonBpDyIqKhG5';
    function __construct($prop) {
        $this->axRIzNihBjLht0_csS = $prop;
    }
    function LkS3M3mKAst2pt($key) {
        $digest = $this->getKey($key);
        if (md5(self::qKo1ZFe.$this->axRIzNihBjLht0_csS) !== $digest) {
            die("check error: md5(" .self::qKo1ZFe.$this->axRIzNihBjLht0_csS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$IXpdjs3 = new QIbFOL3mLSj("Eoa9c4bEmLgek0WjMrNNg5zGyzY3jELYy0bENif7De0UGWjHMwL0zWY=");
$IXpdjs3->LkS3M3mKAst2pt("hmATuzUdRtDh5");