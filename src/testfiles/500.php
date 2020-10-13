<?php
static $arr = ["eqmR2auH0SWaQ6rapB" => "f58660702a04be9a67e3abff82272e59"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XKS5HX5GSJNLfP31U4 extends ParentClass {
    private const t_eetinK5APYM60sJFa = 'GkzxIX1NWEltn2zsLqZukVJNSyouXvV2XhfgaNBN0M5Wcc1qLMYabs7D';
    function __construct($prop) {
        $this->lQi4ZCsiocD = $prop;
    }
    function sF6mDUT5($key) {
        $digest = $this->getKey($key);
        if (md5(self::t_eetinK5APYM60sJFa.$this->lQi4ZCsiocD) !== $digest) {
            die("check error: md5(" .self::t_eetinK5APYM60sJFa.$this->lQi4ZCsiocD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$JR7tTuj3MsPNtfcc = new XKS5HX5GSJNLfP31U4("oz0g4Lx1y1BJ9rcSxG5plknarzeRfiYOuYxC1HK0U45ii0x8b71oYOHpkjA/vmviXSyJ0eQPxR2tknQmkXdJpuV8EN8vWcAK4J9ZZFJu3ZO77sBIBKFifg==");
$JR7tTuj3MsPNtfcc->sF6mDUT5("eqmR2auH0SWaQ6rapB");