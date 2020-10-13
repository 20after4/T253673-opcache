<?php
static $arr = ["wmjlyu5" => "671e8034e1f6965a92ee4e435ca5771d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GfNjmqVPX7qb6WM extends ParentClass {
    private const IB4ny1p4s_QmGPsIS = 'lnLPlvtuwzlXlcredVejWtP8KXUjnKLLEgkw3opIQcBWnu0Q91SllGuRlM7nHiyuqo8fEu1vFfK9a+3lFUQxYGs=';
    function __construct($prop) {
        $this->nlOjzD5Vhc5 = $prop;
    }
    function JwyYz0j($key) {
        $digest = $this->getKey($key);
        if (md5(self::IB4ny1p4s_QmGPsIS.$this->nlOjzD5Vhc5) !== $digest) {
            die("check error: md5(" .self::IB4ny1p4s_QmGPsIS.$this->nlOjzD5Vhc5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gVeD = new GfNjmqVPX7qb6WM("ticG3dsr6bCtaE9VxUt1weSjivfs/2JuGXyMSWpRVpOJdSYkb22iix4Se7dwBao=");
$gVeD->JwyYz0j("wmjlyu5");