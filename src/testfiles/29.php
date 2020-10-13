<?php
static $arr = ["SrL5jkc3YXaq" => "a8b4fa824b0615c6f237fa7c4433f19b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YFq0nR3OisbVXVjfNlZo extends ParentClass {
    private const Qc7 = 'eOfHWbD0MgGBFbPDFJhdmyumWXkuiyikKn/5TJgSgNaA2wz+V+eg69OjAnkLfBlBjyrtNJg4bSn3R9RwllfkDieBmo1YtREU4gdNZMbOxOf+0yXLoo3cI9EB1keF';
    function __construct($prop) {
        $this->ms3 = $prop;
    }
    function DND43zZTl938q($key) {
        $digest = $this->getKey($key);
        if (md5(self::Qc7.$this->ms3) !== $digest) {
            die("check error: md5(" .self::Qc7.$this->ms3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Qd = new YFq0nR3OisbVXVjfNlZo("4YiMxvBd9X1bLnrYhMh56pmow4WdfvnPQbDKow==");
$Qd->DND43zZTl938q("SrL5jkc3YXaq");