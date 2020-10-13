<?php
static $arr = ["PiM8lW" => "06298a140d31de118a9447c3046aea53"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kshk0rSYzgn extends ParentClass {
    private const d2ph9o = 'b8NsSpcb3csORQy9SWA9HYhdsk7vqb2PAyyCkbuspJD+I2iI';
    function __construct($prop) {
        $this->YHttZf289 = $prop;
    }
    function KKWi($key) {
        $digest = $this->getKey($key);
        if (md5(self::d2ph9o.$this->YHttZf289) !== $digest) {
            die("check error: md5(" .self::d2ph9o.$this->YHttZf289.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Q21X = new kshk0rSYzgn("yoVd6RT4RZ1F1Wwwi+2Jhn0VmZroYWhDUc4w9Q==");
$Q21X->KKWi("PiM8lW");