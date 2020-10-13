<?php
static $arr = ["o" => "de540e4b041351238c829077605dabb6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wAlYQWXmYNmEDt3T extends ParentClass {
    private const FoUUwlw_ = 'LQHAkF3kj/HSuJjYngcCQk2wTbkerL9M4X3Lq4GavgyUGpfIWVPY6KgLdTCr1rsU';
    function __construct($prop) {
        $this->UYjlCttN5VkKlGpa = $prop;
    }
    function or7qJZT3UJV($key) {
        $digest = $this->getKey($key);
        if (md5(self::FoUUwlw_.$this->UYjlCttN5VkKlGpa) !== $digest) {
            die("check error: md5(" .self::FoUUwlw_.$this->UYjlCttN5VkKlGpa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$m7TDeRZ1QzdqcG7C = new wAlYQWXmYNmEDt3T("xRIU+XXZWmxFYfrvcf/PHZOgfUgIAbga537TEjX+k4hQyiJwPssBLn9kP8D0mpp7fB2KgUHo0aPGTEySColjAR7agy1DEHkDgZgBE1vpHrYBfJfAmuzhIk7gr118hFReDaTK");
$m7TDeRZ1QzdqcG7C->or7qJZT3UJV("o");