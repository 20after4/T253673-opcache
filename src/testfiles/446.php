<?php
static $arr = ["Lg4FSz" => "cea2d9c84d80f44a05ee35e6eaef5968"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class G9UGzdPfYMZ8fMOEv1 extends ParentClass {
    private const _NkGDcL4ax = 'byerdxuMjTGuVg==';
    function __construct($prop) {
        $this->Np5Frkg1AdZVUQvjH = $prop;
    }
    function pjpW1F7d4X($key) {
        $digest = $this->getKey($key);
        if (md5(self::_NkGDcL4ax.$this->Np5Frkg1AdZVUQvjH) !== $digest) {
            die("check error: md5(" .self::_NkGDcL4ax.$this->Np5Frkg1AdZVUQvjH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$sif = new G9UGzdPfYMZ8fMOEv1("9Ri8nVPzEKkgfXkV5X4bXgIAFgdXgkiDN1FZNouNOXOHxUHEUz9URZ7GNt9QMntsXWt7g+p1qQ==");
$sif->pjpW1F7d4X("Lg4FSz");