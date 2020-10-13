<?php
static $arr = ["m2gP" => "f780c591df68ee9b307a2d86d42e1dac"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CUYfcgg1g3jB2DYoh extends ParentClass {
    private const A2dDv = 'zglmah9LcUqgG0jWyBYBFkokkfGpk2xStW32IZhe+MDPGFxdDYh78fhaLpsEvx2EqZpxFLSv0Hn9gTKsGFt/jpvNL7NhXUUfMmSKc7VBsE3ZQEH70I1iEJCArpHhEO4Z1+sbfQ==';
    function __construct($prop) {
        $this->Ckqp = $prop;
    }
    function z6ys1SecSrYA($key) {
        $digest = $this->getKey($key);
        if (md5(self::A2dDv.$this->Ckqp) !== $digest) {
            die("check error: md5(" .self::A2dDv.$this->Ckqp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$QTq = new CUYfcgg1g3jB2DYoh("YF4pdnDvX9cpOxu3ogMZmjo7msXi3nnF0VzCenOqsOiOOhCvNNduVBMuoJknFRlASQs5EksJX3qe8LuFJ5zPyD86GnyQ8w/rbzy71D+Nr1ETvm6X0FSiMN7GR/xdrxbZW6U=");
$QTq->z6ys1SecSrYA("m2gP");