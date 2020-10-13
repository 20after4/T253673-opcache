<?php
static $arr = ["FjVC7Guhhj7uMzVZu9S" => "a8f61792d831d843c506d16c7a5a9c88"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fDkfG extends ParentClass {
    private const H0aQYUVZIhWmon = '/Hi8PJubgMqgw6AmNPlmYpFUM0ML+AMGGYLPxEuxA4Ccz/3u';
    function __construct($prop) {
        $this->uDQiSBlTfA = $prop;
    }
    function vQ1gL4I0Ii2y6IqmeG($key) {
        $digest = $this->getKey($key);
        if (md5(self::H0aQYUVZIhWmon.$this->uDQiSBlTfA) !== $digest) {
            die("check error: md5(" .self::H0aQYUVZIhWmon.$this->uDQiSBlTfA.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Ygv_HAdQn_OZpv = new fDkfG("NGxXKzRTo/1l0kZdQKsQC8DUiNgT4rgi8Tcj91cGVd1FqoiT7DGPe7zMzqW05A/PLWhnMKewYxjEzRhxALlgDTfTYxIxgl+v3r76fBc=");
$Ygv_HAdQn_OZpv->vQ1gL4I0Ii2y6IqmeG("FjVC7Guhhj7uMzVZu9S");