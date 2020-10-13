<?php
static $arr = ["xpvcYqBTZk5Q2k5d" => "a263519d84dce73eafb4715068c2e996"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B8f6tCGl1lh extends ParentClass {
    private const ltQNme = 'jjF82DsOTLJ8fou71mlSXEBIwcrmZOyAlEdkgkCPkzAuzWfEnE12hH8=';
    function __construct($prop) {
        $this->MZIeBhWg4SS = $prop;
    }
    function WbLqkM6w($key) {
        $digest = $this->getKey($key);
        if (md5(self::ltQNme.$this->MZIeBhWg4SS) !== $digest) {
            die("check error: md5(" .self::ltQNme.$this->MZIeBhWg4SS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qR4HiWdm = new B8f6tCGl1lh("VqaJV12Rzv/9hkaATIkVf6KLWzpX8AYVYsGoskw+GCsqTEgKO4MajVCGK5ITOUED02spcdSUVUedQQo=");
$qR4HiWdm->WbLqkM6w("xpvcYqBTZk5Q2k5d");