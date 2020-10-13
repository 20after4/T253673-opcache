<?php
static $arr = ["wCp7Ql9y" => "290d1dc9d86b9877522ecb09210377ec"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Ku3IO91Ntd extends ParentClass {
    private const ofkMc_Y4eYfCu3ey = 'A51RX5Z5mF6oOxsFNCYta7zMUAhbUMeS5bcHRnnVOdZh6xKa/1UCF6oJBrS9PdCvF/Zfl/Kyqpr6ri8ock9+ml2wVizX1u+uGg==';
    function __construct($prop) {
        $this->syX3zj7mOPrzT5 = $prop;
    }
    function jUgc0b4T($key) {
        $digest = $this->getKey($key);
        if (md5(self::ofkMc_Y4eYfCu3ey.$this->syX3zj7mOPrzT5) !== $digest) {
            die("check error: md5(" .self::ofkMc_Y4eYfCu3ey.$this->syX3zj7mOPrzT5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zZ8AltFYwRzz2NbvrxtK = new Ku3IO91Ntd("rOorYXT3/XnvAHNGmtFlTDX7ZVX20UvChss7SSfdRTfQAT2qfPlZnCO7+YJ8DcTbWGTlP4tMtHpeDjNEjopbmZVwjjVGScXxl9hiG2ZAnfYE");
$zZ8AltFYwRzz2NbvrxtK->jUgc0b4T("wCp7Ql9y");