<?php
static $arr = ["XIxdkn6E2dkl" => "f58861fcad88d0577911063f0d3a331f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CCRibim5ateo extends ParentClass {
    private const FuCiS3eZArzQtZi76v = 'XsDS+M8s8AfcK0qTK8w2xubYgTtGLhSP4iQyMQ==';
    function __construct($prop) {
        $this->vG = $prop;
    }
    function NtWttj_lQd8l($key) {
        $digest = $this->getKey($key);
        if (md5(self::FuCiS3eZArzQtZi76v.$this->vG) !== $digest) {
            die("check error: md5(" .self::FuCiS3eZArzQtZi76v.$this->vG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hiXClFBrLBshMX40kEM8 = new CCRibim5ateo("KpSVfxbOlOUE+sf87F/AAhWOAHg9SCR9SqmDwu7PShs4p4ZuDN1Ue6X8PO/9Ptzs7Y7MIlRsRr5qFYTP8Z5FyD3q");
$hiXClFBrLBshMX40kEM8->NtWttj_lQd8l("XIxdkn6E2dkl");