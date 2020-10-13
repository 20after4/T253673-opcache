<?php
static $arr = ["O" => "436553ec7431951c9d9d80d66811e469"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class nh3vyvY_36uINGTErcgk extends ParentClass {
    private const iYm4sCWtVQI7W = '/DSgW/oZBfCO9IK7Spo7FCAnEBQ7uXJI/GmKfH8eZTxm8XgS7SPnkSzY8YGYy3MNwHnrfUcBH59DU8s=';
    function __construct($prop) {
        $this->C6SvnHLQ17oYlK = $prop;
    }
    function Bg9jjWzwNDay62($key) {
        $digest = $this->getKey($key);
        if (md5(self::iYm4sCWtVQI7W.$this->C6SvnHLQ17oYlK) !== $digest) {
            die("check error: md5(" .self::iYm4sCWtVQI7W.$this->C6SvnHLQ17oYlK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wdVPlvFBAQAk5 = new nh3vyvY_36uINGTErcgk("4iFxOfpIw0zSU5gsKHjwjP4R+PP1JTpRakP6IdeJaQO9ywUcWi0t8I5rVRJ7vGuFyQINChJ5Rzgbf4g3wKqVMUXMEsS/8Pb4nLI=");
$wdVPlvFBAQAk5->Bg9jjWzwNDay62("O");