<?php
static $arr = ["GncSIwAmzkxee" => "23178209d4f57389d175f17db551350b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class j extends ParentClass {
    private const KE9SJDs = 'Rl0Q2me4PiO7Q7oV3DLNaWCk/Y23rZktltkaaWb2EqXd0KJYTaOEg9ZWFqgTLng0AhwyZ9Xgwxb5SkZtII5M4hwatO3MeqJIY0o896IyhU/qvYHsqGu9pU1i';
    function __construct($prop) {
        $this->MjXKWVkR4XFG2jiK = $prop;
    }
    function GV1($key) {
        $digest = $this->getKey($key);
        if (md5(self::KE9SJDs.$this->MjXKWVkR4XFG2jiK) !== $digest) {
            die("check error: md5(" .self::KE9SJDs.$this->MjXKWVkR4XFG2jiK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MNQjHx7LqW9wX7NN = new j("V6mu7+s9utnu7V0rIrXpAFCpOyYBkKzPp4D80rPT8A18o5RaydUNfMFMIKjjQYBSbiZc5vSS2cqc11D2sbLFuiWwx588INvC");
$MNQjHx7LqW9wX7NN->GV1("GncSIwAmzkxee");