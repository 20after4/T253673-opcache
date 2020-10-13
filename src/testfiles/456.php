<?php
static $arr = ["is3fIgNBp24" => "4a9398a597332ba2013f5a8b70f317d4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q0gozjp3mygmXZj extends ParentClass {
    private const _GhEY959J8_oy6w = 'jQMugzIWzpjlIOzaC+Dj6ZJqyJ/dzIf5c7t8SshNSEomeyupEkDTjGmhE98SJ1bvJFQMHbAyRSjmt0LjfS/qUorwI1l35sFV+dQkiMATy8oIElq6c8wUZ0A=';
    function __construct($prop) {
        $this->mrRTSQWVupSD7BPb = $prop;
    }
    function zdDQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::_GhEY959J8_oy6w.$this->mrRTSQWVupSD7BPb) !== $digest) {
            die("check error: md5(" .self::_GhEY959J8_oy6w.$this->mrRTSQWVupSD7BPb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MFEBMoEB = new Q0gozjp3mygmXZj("q+RdWg0TKHK3WaGjKHM0jsJWDEyClhTXzshaIXFb8lweHl8mzSehPCgYeQ==");
$MFEBMoEB->zdDQ("is3fIgNBp24");