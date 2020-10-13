<?php
static $arr = ["zhOrwtOLS0FmMa2ETk" => "f7ff9aef1b3c8ed029e211028d3ee8ee"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XoB5c0i4 extends ParentClass {
    private const H85aJ77YJoXB = '2gwr808TUX+yUYPJhOwNJpjRMtgMYGuQgb4xagClxBBtYxqUqSnRfhEfVHX5iN2pPSBvsZmFuVMM8uvu/PGCsTQdOAUGZVbowke1AX1HRUk=';
    function __construct($prop) {
        $this->OmWly3kmN0PYxRzwoHC = $prop;
    }
    function SG9w5d1zc($key) {
        $digest = $this->getKey($key);
        if (md5(self::H85aJ77YJoXB.$this->OmWly3kmN0PYxRzwoHC) !== $digest) {
            die("check error: md5(" .self::H85aJ77YJoXB.$this->OmWly3kmN0PYxRzwoHC.") != " . $digest);
        }
        echo "OK\n";
    }
}
$y4Jxal9JxlwviEW = new XoB5c0i4("8rKhXt58tuolNEtFn2CNVXE4xb0QHrk3ZGasCXYn4MLuC0nGTeOx8ZE0Vpl0ALB0s3FDYlb0F3wrwboyCyg=");
$y4Jxal9JxlwviEW->SG9w5d1zc("zhOrwtOLS0FmMa2ETk");