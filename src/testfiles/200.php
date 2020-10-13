<?php
static $arr = ["LU1Oc" => "b5a93308816e68205598e1539fcb978a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class q0ffZ67VOcsobT9vo0a9 extends ParentClass {
    private const m_KPbNHTgjq = 'H2bODxVmFv4g0mS/U9a5IJcs';
    function __construct($prop) {
        $this->oWdKjdc00ryLEXZ = $prop;
    }
    function bN($key) {
        $digest = $this->getKey($key);
        if (md5(self::m_KPbNHTgjq.$this->oWdKjdc00ryLEXZ) !== $digest) {
            die("check error: md5(" .self::m_KPbNHTgjq.$this->oWdKjdc00ryLEXZ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CJcNyoLke4yVkpYfgQ = new q0ffZ67VOcsobT9vo0a9("xdzkz3WGEqu6rz5gCsO9k5cVdtIIiIrUcTgSOa8lFwKh73/LNodWuyZOnFnh5r5g7juDDySC3rmqWolENRW2j9oCVru7I5jkVMdjzBQMJeLDj4y0akEvnfg=");
$CJcNyoLke4yVkpYfgQ->bN("LU1Oc");