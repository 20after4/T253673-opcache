<?php
static $arr = ["kkvquiYGl0tysVwiLG3Z" => "88b775e1cdba313d83b3e1b695ae2ae5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class zF4bpfajaewpvisN1 extends ParentClass {
    private const Lsw = 'PhWcnP2c7BRQHDGrehEiSe5LgYocGURIlp69vp+hCQKZAZvtqMlca6Y2XRdcy74Kk4/ArGRlKXvoNbaW2+pn6wzfLmqczyrfz6FUtTfsIE6YytdM/g==';
    function __construct($prop) {
        $this->P8ZYMC5GFnwsScbV = $prop;
    }
    function L($key) {
        $digest = $this->getKey($key);
        if (md5(self::Lsw.$this->P8ZYMC5GFnwsScbV) !== $digest) {
            die("check error: md5(" .self::Lsw.$this->P8ZYMC5GFnwsScbV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$nd7Wc8eDNm3D = new zF4bpfajaewpvisN1("MeIVlsAh5gAju88mpLFzmFMrS0utyGT3UWz/N45XSK6iKjQBsnTraPXA0xQAQ9GQZddOBWjLUAmh4Do8HforkU0Dc4E0rZgUe325VYpZ6xPhLyv9l5/elOAzk3Ju");
$nd7Wc8eDNm3D->L("kkvquiYGl0tysVwiLG3Z");