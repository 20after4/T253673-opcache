<?php
static $arr = ["dpxXxl28Li" => "54b3dc11909d8ee62463db04c3da8a29"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VmJQ extends ParentClass {
    private const Wdov7StYxS6 = 'tlNKkfGJdqSDPskQuz5gROPKIjpgSt1emQwRe38b/u63CUG73ehMxVThoiOItbihpeynRRkaryKSQ7tL';
    function __construct($prop) {
        $this->YXZZWtGIZIc39c = $prop;
    }
    function veL8_vCG275QhrXhTU($key) {
        $digest = $this->getKey($key);
        if (md5(self::Wdov7StYxS6.$this->YXZZWtGIZIc39c) !== $digest) {
            die("check error: md5(" .self::Wdov7StYxS6.$this->YXZZWtGIZIc39c.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hW = new VmJQ("koYghd5WigSEYIZdNVKRyEFBwcpcbvMQSzOoJ0JbyISz6ZhDmXUuNVgGCk8Pcw2nrA4xYCxrOgU4RyiYs3yTlmDFsr8=");
$hW->veL8_vCG275QhrXhTU("dpxXxl28Li");