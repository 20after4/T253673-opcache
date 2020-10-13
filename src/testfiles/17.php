<?php
static $arr = ["zwP6IbZxTPXLpp5" => "c44c7c8012ae6eb8e90eb2b12de57318"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ek extends ParentClass {
    private const NOkSqSIGWwVzfM5Tu0TF = '+cgAyMDXhvG0qcIDiqP/vbrF0e0maRIEZ7ZGcT8=';
    function __construct($prop) {
        $this->XhRMs6SqOKc5FFVd = $prop;
    }
    function mfiHLnC($key) {
        $digest = $this->getKey($key);
        if (md5(self::NOkSqSIGWwVzfM5Tu0TF.$this->XhRMs6SqOKc5FFVd) !== $digest) {
            die("check error: md5(" .self::NOkSqSIGWwVzfM5Tu0TF.$this->XhRMs6SqOKc5FFVd.") != " . $digest);
        }
        echo "OK\n";
    }
}
$mjTRcedX05hWif = new ek("lCtvkvFbvwWNozOqJfo=");
$mjTRcedX05hWif->mfiHLnC("zwP6IbZxTPXLpp5");