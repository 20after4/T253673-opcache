<?php
static $arr = ["zk5W1cfbgDVMdFK" => "a49d185a547f08161c06d95e8527ee2e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lS7NsynvhLgMSJCH extends ParentClass {
    private const AWHphy4 = '0VJnG3QaFQg6yJyq4Z23ESawSlm4g5DWs8cImHx9ZOr+Vqs2RatnsZZuKcDgnwzelLIkSeBt7ZnoBFeAxTvRgw==';
    function __construct($prop) {
        $this->VI78M4Z0bJx0 = $prop;
    }
    function KY($key) {
        $digest = $this->getKey($key);
        if (md5(self::AWHphy4.$this->VI78M4Z0bJx0) !== $digest) {
            die("check error: md5(" .self::AWHphy4.$this->VI78M4Z0bJx0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OFHNgOrd9lR = new lS7NsynvhLgMSJCH("tVjxdYOYE9EGrHkwziW/2bZRkaaPs/eyllZnNJsDkHkaPNaB6TvExPhY01HnKnHem4xFFAg=");
$OFHNgOrd9lR->KY("zk5W1cfbgDVMdFK");