<?php
static $arr = ["C" => "515ae1bc1a7291df241bc69097ca9a93"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XUJNHZtRXpt4xEQ extends ParentClass {
    private const Fp0vue7Qg1Q8qzyrbiJ = 'BUfRkJCM7Txq4wZw0yztGRVnoXaPvsVFZS26W/aDkYIibSuYiKo/FLkpSIj33ZCbPIoRiNS+';
    function __construct($prop) {
        $this->YJMEtvkVC1 = $prop;
    }
    function ThHf2H4zMlY0PpR($key) {
        $digest = $this->getKey($key);
        if (md5(self::Fp0vue7Qg1Q8qzyrbiJ.$this->YJMEtvkVC1) !== $digest) {
            die("check error: md5(" .self::Fp0vue7Qg1Q8qzyrbiJ.$this->YJMEtvkVC1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$mI2i7 = new XUJNHZtRXpt4xEQ("ITRwT1pe9kDjsmbsIZTKkLC21DknsJu84mj5mOypFasQi4K/pOw5+nTvCUAnZM7dZFE1hjLHOGivLW4JsBn0ErqUEfWR2BZy");
$mI2i7->ThHf2H4zMlY0PpR("C");