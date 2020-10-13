<?php
static $arr = ["vKddJPZNlj6" => "a14d4daed94084b45634da353f5dc61b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class J0QNxvJRBkFc_Kwoy extends ParentClass {
    private const yFFW9XZ1QO3EA = '3BiC2nD98lC3wWGLaZO52LkzPme7t9h0o1xKCzgXSGU+NzZd4Zw7+3e5tYmH9aLzPhrzMvJ20Ucd13dagmG+uHIrc6duKIc=';
    function __construct($prop) {
        $this->uLJLYhfrzHVh = $prop;
    }
    function zyP0bJv($key) {
        $digest = $this->getKey($key);
        if (md5(self::yFFW9XZ1QO3EA.$this->uLJLYhfrzHVh) !== $digest) {
            die("check error: md5(" .self::yFFW9XZ1QO3EA.$this->uLJLYhfrzHVh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yAbm9m_mRoiA = new J0QNxvJRBkFc_Kwoy("rJjI8GlgTOnIVpnOMGGn/6E/GVLDMCwh2QdyEm1KeA2LGKemllC7n5fU+TxRX2NANntwkH+aPPHXb8dCl9YKjgmdQCPkv9YvxOzhtQlbBC4P68E0aRvs8Bc=");
$yAbm9m_mRoiA->zyP0bJv("vKddJPZNlj6");