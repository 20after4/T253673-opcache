<?php
static $arr = ["v" => "b8d8c4f5fc7157aff9fa1bce0069c32b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RYEty7jFeEe extends ParentClass {
    private const KsCQx7mD7d = 'Ha45cJV7DTZA8eqDn/ACgg7CthROsufxLVVAbllv5fonCiD4xKBl6EzCdfnVWMlccfCF1UybeqLVImA=';
    function __construct($prop) {
        $this->rE6H7ohSbu = $prop;
    }
    function TMh($key) {
        $digest = $this->getKey($key);
        if (md5(self::KsCQx7mD7d.$this->rE6H7ohSbu) !== $digest) {
            die("check error: md5(" .self::KsCQx7mD7d.$this->rE6H7ohSbu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$mZ_BBfL6bLaWhwMdd = new RYEty7jFeEe("Px8K+7Gb7b/NvETlR1TTYdQkLvd5y4Q123yVQCHnozL9+/IKjbLnGnS9ekisOaj/eARa5zEjUtn3fWDcen8QDOc3YbksGFcxDGQ2IGP+/26fjUQeu9jjqQ==");
$mZ_BBfL6bLaWhwMdd->TMh("v");