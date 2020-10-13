<?php
static $arr = ["a7lf3ULvT" => "660042a03f8511dfad628f6711654403"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class KWY extends ParentClass {
    private const OzTBUnrfGT_x46 = 'j1JBw0CT96ixmBfzYeIYbfdEkpwQsme67iJnmyUxM9j6zV0BAJ2YSrngI3OFnHvdX0s4XG60XhFcnI1/eHSk8cZNcPVvibCm0kuVvWk48/gpE/P51kziYhr0VM3yTw==';
    function __construct($prop) {
        $this->f8nfhGUUKczLb_YI6 = $prop;
    }
    function o8hoW($key) {
        $digest = $this->getKey($key);
        if (md5(self::OzTBUnrfGT_x46.$this->f8nfhGUUKczLb_YI6) !== $digest) {
            die("check error: md5(" .self::OzTBUnrfGT_x46.$this->f8nfhGUUKczLb_YI6.") != " . $digest);
        }
        echo "OK\n";
    }
}
$h_vXKKc3Wgqtz6DX3zE2 = new KWY("wuT9Ncpn4bQ313C5X91yQxxlESoog36lsmEabDM8uygnQElJjT/cwtxuGz3jYMEYYp76DJVkD8iZiuIFnDQPdR0cYbkkuYo+XBFt7QEMNg==");
$h_vXKKc3Wgqtz6DX3zE2->o8hoW("a7lf3ULvT");