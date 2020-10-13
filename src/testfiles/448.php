<?php
static $arr = ["BItjzpS5G8i" => "34198b81c50419bf4ddceff68b6950cb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class c extends ParentClass {
    private const yGZjdYjsajrsZr = 'Eml437NhZwYqXRSyR5D+5eO9/S6oLu18BY9DElf9pQb+Bw7tuPAXyu5tlw==';
    function __construct($prop) {
        $this->I = $prop;
    }
    function zVmDJDK9r_C5yUROkbF4($key) {
        $digest = $this->getKey($key);
        if (md5(self::yGZjdYjsajrsZr.$this->I) !== $digest) {
            die("check error: md5(" .self::yGZjdYjsajrsZr.$this->I.") != " . $digest);
        }
        echo "OK\n";
    }
}
$e_eL2HaTMfA = new c("Y43a4TbkN9bwHHVfw91cWWryro1ZS4zX7jR14W+NNlggLz4OtxhdnGXIi8Iy6GWh6egQSm6dRnstmT8esRwHWWrYkW46wlxzxUJxBoYTAn2y7+9Q");
$e_eL2HaTMfA->zVmDJDK9r_C5yUROkbF4("BItjzpS5G8i");