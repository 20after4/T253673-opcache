<?php
static $arr = ["ku2LwspZm6B" => "62650cee3a2777dd9d5eed67e92f13f4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Iyd8DK9X extends ParentClass {
    private const oY1n_0G8eYA2s = 'bmel1oyyO7loD9RZl5+8WiaZWJwo';
    function __construct($prop) {
        $this->uySBnLn2W5jsDs8GW1Ny = $prop;
    }
    function GWERCRx($key) {
        $digest = $this->getKey($key);
        if (md5(self::oY1n_0G8eYA2s.$this->uySBnLn2W5jsDs8GW1Ny) !== $digest) {
            die("check error: md5(" .self::oY1n_0G8eYA2s.$this->uySBnLn2W5jsDs8GW1Ny.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BXCHRLb = new Iyd8DK9X("Fjm262iWEPTDYotw0QlqXwbLTKKQy3IX1kpNT6dhCXfetRJPbti0cDIMr/g8HP00Fdz+vKlB4l/TuB+VwlmQn1IbIBLCdGzYeglPJM+YEKlMug==");
$BXCHRLb->GWERCRx("ku2LwspZm6B");