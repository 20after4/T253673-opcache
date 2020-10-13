<?php
static $arr = ["NIjh7d8" => "a7770da08f2357cefbd3b661898a90f2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OyQogiqwnoS4 extends ParentClass {
    private const eZw1Xfy3fzs = 'dz9f4oYizJxVByFYXu50fC88rmDGNznVR+q5LyoJc9PpAtShGpxeRG+KEWfc0ZT6XDus/v8UadIn5vps3zSoyQ==';
    function __construct($prop) {
        $this->NwepvsMPZORFg7l = $prop;
    }
    function xXQJm5YgLIXxdQXV($key) {
        $digest = $this->getKey($key);
        if (md5(self::eZw1Xfy3fzs.$this->NwepvsMPZORFg7l) !== $digest) {
            die("check error: md5(" .self::eZw1Xfy3fzs.$this->NwepvsMPZORFg7l.") != " . $digest);
        }
        echo "OK\n";
    }
}
$K4C2S_4aGRVY8w8xk9 = new OyQogiqwnoS4("zNWbPYeDVrpCL79ycl3LG0EeUnNU3SWFCEYjw8FdGIPLdcUK7RlPkqFLA5hRIlFRwzI7uDNv3mM5KJMfAI8=");
$K4C2S_4aGRVY8w8xk9->xXQJm5YgLIXxdQXV("NIjh7d8");