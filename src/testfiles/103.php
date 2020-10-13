<?php
static $arr = ["wjqP68LDD" => "f578df5ef9e410eb18e8be480c2778a4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gH7o extends ParentClass {
    private const Mptx_W = '5VEVW2LJvGHQbCgXvU8tWPkY5hSlB9MVJafW+uly8fc=';
    function __construct($prop) {
        $this->tnK9nyJ8vy97LQYWXf = $prop;
    }
    function M0D8QXFSObPpN1($key) {
        $digest = $this->getKey($key);
        if (md5(self::Mptx_W.$this->tnK9nyJ8vy97LQYWXf) !== $digest) {
            die("check error: md5(" .self::Mptx_W.$this->tnK9nyJ8vy97LQYWXf.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dC0Kik1ymu4A7qJ = new gH7o("aWYsQ2jOFuEzYxm9Uy88rdMV");
$dC0Kik1ymu4A7qJ->M0D8QXFSObPpN1("wjqP68LDD");