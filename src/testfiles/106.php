<?php
static $arr = ["qQP_N9P7" => "1c731c6351a98bd507f1d83cb4273e77"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class T3rUp5BIOTr extends ParentClass {
    private const AMYy7lP4UN2wi3jzirM = 'zOlFonNfNz86IjpnzzP06UaDu1R3q4juNP6lOpudijNNTUzgrl9XY17S7AJw0ByGLsYBm9ZxaFOwSuHAOMcGfHLWwTuxPbMf0Ej8ibcQcYJLlzy60U6fc6k=';
    function __construct($prop) {
        $this->mbDwYlB86R = $prop;
    }
    function xZkyTBf6uID($key) {
        $digest = $this->getKey($key);
        if (md5(self::AMYy7lP4UN2wi3jzirM.$this->mbDwYlB86R) !== $digest) {
            die("check error: md5(" .self::AMYy7lP4UN2wi3jzirM.$this->mbDwYlB86R.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Xp7 = new T3rUp5BIOTr("3JTNxtTxjJoNoHvhOCBpOJAastXyFc4YVbPnomXNs/PTc7U7vkHNB5Efd6IvYzWL4NwaqQ==");
$Xp7->xZkyTBf6uID("qQP_N9P7");