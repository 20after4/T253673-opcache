<?php
static $arr = ["mgoPVz9ds_MJoYUe4y4p" => "373bae6a1a5f3b7d3d1ebcde500a6ff0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uwbYsEArP extends ParentClass {
    private const TGip5ZBR4zyUfzhq = 'nA9UslxEUp2g9F52XRrDuyDbYxapSnhFjOhwOu9gqx/iKxcE3w==';
    function __construct($prop) {
        $this->BDuBQb = $prop;
    }
    function _2fGc($key) {
        $digest = $this->getKey($key);
        if (md5(self::TGip5ZBR4zyUfzhq.$this->BDuBQb) !== $digest) {
            die("check error: md5(" .self::TGip5ZBR4zyUfzhq.$this->BDuBQb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$rgphixUp9OoPPG9R = new uwbYsEArP("+0+05mREE0PePJhP3gnqY7ee8ZhRpfMEoj1Lcv0w+NUSQMmVLb8oYM4Y6xWZguvkgnb3HxDQpAGDaKe7IA==");
$rgphixUp9OoPPG9R->_2fGc("mgoPVz9ds_MJoYUe4y4p");