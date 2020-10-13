<?php
static $arr = ["irA18XwJS7EmGfAT" => "161a2fe091698b3a2ebec881ce0b1f31"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class sadw extends ParentClass {
    private const wvqCZ7fvKP6u = 'ob+DvcWnMhyVLajFCD80d5V6MSmmlKPkWe+aEap8tYJPR4bMt0d0rE2K5W+6RbAFLxcOJ+SlN2tDCWKxKkSKodI5vfwcvJ06TEtfSev2t2eDUYZTdYrO3sLk';
    function __construct($prop) {
        $this->cQWAM6n = $prop;
    }
    function fcdG29scRShBIihI($key) {
        $digest = $this->getKey($key);
        if (md5(self::wvqCZ7fvKP6u.$this->cQWAM6n) !== $digest) {
            die("check error: md5(" .self::wvqCZ7fvKP6u.$this->cQWAM6n.") != " . $digest);
        }
        echo "OK\n";
    }
}
$f053ReJNT = new sadw("L761dbW/qM2xn7lkWZ9kCM+ht6D6AjIhw9B7h0urFfQLYtIVVgJJ5bdOftebJMVgpfTiAZ3DhG+oBxE3eQGw78ti8LGy+x1F0e4an3pMqfYRB0U=");
$f053ReJNT->fcdG29scRShBIihI("irA18XwJS7EmGfAT");