<?php
static $arr = ["lLApVoB3YjWy0AE" => "4a6b209b03466fdab5bb7bd328c0005d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BZl3HGvyAfeLsi7l extends ParentClass {
    private const RUkbxaJ0AzEqLo = 'VoxtJksGm6iFJrSLcZs1PbiODEUOYIrF';
    function __construct($prop) {
        $this->JNW5B1 = $prop;
    }
    function p3e_pQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::RUkbxaJ0AzEqLo.$this->JNW5B1) !== $digest) {
            die("check error: md5(" .self::RUkbxaJ0AzEqLo.$this->JNW5B1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Fllh = new BZl3HGvyAfeLsi7l("tCHVkjuYPqLQsrFp/BpRjjjjKQd6gl2SpmQK8LlO5XWpoMHne4kF4P70KRTgavSNSlxJ");
$Fllh->p3e_pQ("lLApVoB3YjWy0AE");