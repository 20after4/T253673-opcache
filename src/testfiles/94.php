<?php
static $arr = ["VfbRc" => "d6b4e902ffc37ab34783070aa1a0c580"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class izToqhTg30DyLXN extends ParentClass {
    private const gpVdLAGY8AIO8uGfL = 'hjLrLPgx09pKHnao9BoprpZGCf+GK4OVeWtqEhvTMAWOje9r81VkSnUc9KMsname9EQXogTH0QhuIHbG1kv2fEZu8X5c5d/WFwmkA7hvJN4UTcm/8F/t24LeKLJ1VxmvINYY';
    function __construct($prop) {
        $this->o9ya_Ke = $prop;
    }
    function a3j($key) {
        $digest = $this->getKey($key);
        if (md5(self::gpVdLAGY8AIO8uGfL.$this->o9ya_Ke) !== $digest) {
            die("check error: md5(" .self::gpVdLAGY8AIO8uGfL.$this->o9ya_Ke.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jbmggyr0jEl1 = new izToqhTg30DyLXN("ferOsFmVJZ4n1EX5VgSX6GGwVw==");
$jbmggyr0jEl1->a3j("VfbRc");