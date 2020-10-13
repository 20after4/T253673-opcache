<?php
static $arr = ["bSdKJ0VotON" => "31c3e868a4e67ac0c867aa2504e1487b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lVwMdRcMrrnMqN7_mT extends ParentClass {
    private const nW = 'G7CWz/jGhp9mK+UaYuELEa6c5nLLoMqgevPsYLvvWz9ZEmg9Ug==';
    function __construct($prop) {
        $this->T0q0kcbn2yt6q = $prop;
    }
    function xn($key) {
        $digest = $this->getKey($key);
        if (md5(self::nW.$this->T0q0kcbn2yt6q) !== $digest) {
            die("check error: md5(" .self::nW.$this->T0q0kcbn2yt6q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yPuI = new lVwMdRcMrrnMqN7_mT("fT3igGUElSOIsVQU+saDDTMgTyYuA94ntRwRQwdnJrMbUjGG1j9S1R6Jirqw4EYHspj/uWgWW3pFQyPSzvVoFiZemQ7tU+A=");
$yPuI->xn("bSdKJ0VotON");