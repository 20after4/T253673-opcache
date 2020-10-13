<?php
static $arr = ["Qe4llNVB9dR6fsWvkj" => "120b9ac10ebfcc337bf3a3a4737b14b0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Ob9CM2nk1sgUfKhcvW extends ParentClass {
    private const ifEsNE = 'uxdR5fnxNYYKeV85OvK3cj4lAabIwE9d7lu5zyVNBEp1NDmoQBhY7kQcH62WA2LwuTFemds=';
    function __construct($prop) {
        $this->ZoBqkGSXJ5ERs8x_xOr = $prop;
    }
    function LyslNM($key) {
        $digest = $this->getKey($key);
        if (md5(self::ifEsNE.$this->ZoBqkGSXJ5ERs8x_xOr) !== $digest) {
            die("check error: md5(" .self::ifEsNE.$this->ZoBqkGSXJ5ERs8x_xOr.") != " . $digest);
        }
        echo "OK\n";
    }
}
$braKaaex8ha = new Ob9CM2nk1sgUfKhcvW("GX1KPj0uJUewXvocklx+VyzeVE4M8s4dr7d48xFpIdDptZNrIOAj0hjodABQ9e8X2SUx4NZYhBr3XP1vr5txdrwgkFjbrX28INCahvy9D6lkhzJUrPfaHiwloFCPoX1I8IE=");
$braKaaex8ha->LyslNM("Qe4llNVB9dR6fsWvkj");