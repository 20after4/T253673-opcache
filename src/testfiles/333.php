<?php
static $arr = ["p" => "6a239baadaa8756ff0ef8b841bfe4a9f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Cn0oYpldk7Vbp extends ParentClass {
    private const GK79RI5sSzO3 = 'YWCmdOxLCTUDNP6QkxwkSj+JegfjmKS/n69VlH3kh74YfJDFB2wJtQc0Sm0sZJ2K71UtPx8=';
    function __construct($prop) {
        $this->zO0R = $prop;
    }
    function fL7VPLrZA7inqiAfoSB($key) {
        $digest = $this->getKey($key);
        if (md5(self::GK79RI5sSzO3.$this->zO0R) !== $digest) {
            die("check error: md5(" .self::GK79RI5sSzO3.$this->zO0R.") != " . $digest);
        }
        echo "OK\n";
    }
}
$rWw9 = new Cn0oYpldk7Vbp("Hsevf5PlqXFi4dtffjzOwzSit9Y9At4E0PoNNgwF8GHEUrNOI3y0Fj4m0mhaPfhZob27Rc35+TQ=");
$rWw9->fL7VPLrZA7inqiAfoSB("p");