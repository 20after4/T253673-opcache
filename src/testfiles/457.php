<?php
static $arr = ["_vcF4j4Ea1VbnXIc" => "82d8c4b850631c7e760728a5c84cb2be"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VOUcXkchYd extends ParentClass {
    private const Vkz9kChYZsL7PslNH = 'hKkS4tWrmwGUnZxZ9W/aTd3dUwiwgyvPp8QzeEFFhww5OBPjrij2xgLMciNOgZIYvNTrOBNq';
    function __construct($prop) {
        $this->hUYdx1WPnaq = $prop;
    }
    function wgeNTz3KSgmpfRJsnT($key) {
        $digest = $this->getKey($key);
        if (md5(self::Vkz9kChYZsL7PslNH.$this->hUYdx1WPnaq) !== $digest) {
            die("check error: md5(" .self::Vkz9kChYZsL7PslNH.$this->hUYdx1WPnaq.") != " . $digest);
        }
        echo "OK\n";
    }
}
$j2nizs = new VOUcXkchYd("f+8AZTKqBeB28C8dGWhgZZISP6SLkqLgagYUrcJpalMc5ASAJkMg6BzrpnJydCVBFGXgOOo=");
$j2nizs->wgeNTz3KSgmpfRJsnT("_vcF4j4Ea1VbnXIc");