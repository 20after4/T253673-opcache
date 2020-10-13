<?php
static $arr = ["oAtBYNRRM6H7TPj2Av21" => "d7ddf27880a6093082a21886f6c65e90"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XNXjhPRdBP5wrms6ygQM extends ParentClass {
    private const nVF = 'Nm7YUMzff/8Swi64SZhvp/P12i0z';
    function __construct($prop) {
        $this->iN5WKBKVugBgMLmBHjB = $prop;
    }
    function KL6($key) {
        $digest = $this->getKey($key);
        if (md5(self::nVF.$this->iN5WKBKVugBgMLmBHjB) !== $digest) {
            die("check error: md5(" .self::nVF.$this->iN5WKBKVugBgMLmBHjB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LJK8Fm3l_AP57MYYuKBr = new XNXjhPRdBP5wrms6ygQM("5t0LDD+1w0cVrHQpY6R8y3D3fWMUq3cHY4RBOgBR0yPaiYszz5x5QwGo95N6bmOxXkbA3D9rdqBunzpbCxsD102Rvg+HB8zS8ztdyIc=");
$LJK8Fm3l_AP57MYYuKBr->KL6("oAtBYNRRM6H7TPj2Av21");