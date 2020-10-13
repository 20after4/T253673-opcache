<?php
static $arr = ["yA5cZx" => "1910e557a3a382222f9a31c92c52639b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class veS extends ParentClass {
    private const Eg8HAGPN_GG = 'jWRchPrJI/QsULfZqzvdUtRYAoqhww++0PVroeQ=';
    function __construct($prop) {
        $this->c = $prop;
    }
    function VmX4NB3ChoFGtS($key) {
        $digest = $this->getKey($key);
        if (md5(self::Eg8HAGPN_GG.$this->c) !== $digest) {
            die("check error: md5(" .self::Eg8HAGPN_GG.$this->c.") != " . $digest);
        }
        echo "OK\n";
    }
}
$a = new veS("JPswU91GksoUJBJ0O+7YwU1WYBWhpYmftBbVOTJMFhfoq601GMQresmhcH+VCWQ=");
$a->VmX4NB3ChoFGtS("yA5cZx");