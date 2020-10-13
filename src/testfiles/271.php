<?php
static $arr = ["FwSgdSUU" => "6fd6b1cf8336e329ccf28f46ae443daf"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class u5cOcQAMU6yUNb6K2p extends ParentClass {
    private const APThynd8k8SViCn9fPq = '1gCWlY5JBgk6LkpHql7BQF+yLtsL2NgW1LzRUfk9bSjPAB+Hz+WBaw==';
    function __construct($prop) {
        $this->Ra1Gi = $prop;
    }
    function b57wdt15buEv($key) {
        $digest = $this->getKey($key);
        if (md5(self::APThynd8k8SViCn9fPq.$this->Ra1Gi) !== $digest) {
            die("check error: md5(" .self::APThynd8k8SViCn9fPq.$this->Ra1Gi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iR2 = new u5cOcQAMU6yUNb6K2p("tnnS9gMYCStFX5ucYRAbt+bqWP6Wwpt7xcAiUTixIgrgOU9uFynFQNf/dgUSHjYvkbycKSMfC4ZKD9E=");
$iR2->b57wdt15buEv("FwSgdSUU");