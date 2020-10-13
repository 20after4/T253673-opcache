<?php
static $arr = ["GlCZmKQQhsAOWzp" => "84ea9fa1e702748271f5bafe7ef92bd3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class JspKLEW extends ParentClass {
    private const rwKPeTYSYz2qu1 = 'edDgee/PQ/ZFASR5ZHyGfQrZbXvyw+2iJKZ4h8zKCg6lWS+9Gbc=';
    function __construct($prop) {
        $this->TBoNI1nt_ojkABEBxBB = $prop;
    }
    function k27yUfhDz0M4($key) {
        $digest = $this->getKey($key);
        if (md5(self::rwKPeTYSYz2qu1.$this->TBoNI1nt_ojkABEBxBB) !== $digest) {
            die("check error: md5(" .self::rwKPeTYSYz2qu1.$this->TBoNI1nt_ojkABEBxBB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$K6Hj = new JspKLEW("e0WNLRKBDYtgqEanr7IdgH0kmd0q7Bzn+qQBXrJ/je/H1w3inLL5TBmJDXj2x7Q+T2Q=");
$K6Hj->k27yUfhDz0M4("GlCZmKQQhsAOWzp");