<?php
static $arr = ["dTMTJ2QvM25obEuOc73" => "95d5f7b939c71fd779274eedb3c661df"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class aldfFyAHfyFFR4Idyff extends ParentClass {
    private const jlFf = 'MCVIBnMUzeE6m+2SrKHa6ATpfO7Rf17vX+BEDKSW/3aYNLn1w7f50WDffvokBjSWdetMpqAL2+Feecx3AcPn';
    function __construct($prop) {
        $this->HL1CdEJTr3GQnLS0_W = $prop;
    }
    function kjqahN($key) {
        $digest = $this->getKey($key);
        if (md5(self::jlFf.$this->HL1CdEJTr3GQnLS0_W) !== $digest) {
            die("check error: md5(" .self::jlFf.$this->HL1CdEJTr3GQnLS0_W.") != " . $digest);
        }
        echo "OK\n";
    }
}
$E2Ccs = new aldfFyAHfyFFR4Idyff("affxUaSmTHQ8PqF89Cr7ZxlEMe1JH+UpUuu+U3665BHZApexxLLkOnmHRhh2xS8dOWGJJl5UH2wnq7214ppVnBXrFzCgzDQGLUUrG10lUq4t");
$E2Ccs->kjqahN("dTMTJ2QvM25obEuOc73");