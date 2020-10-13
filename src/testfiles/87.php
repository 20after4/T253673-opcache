<?php
static $arr = ["lgIVijw3K" => "fff6b542c1d7447f02a925dd2f011665"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Uj4_38C61NwLGAyM1yl extends ParentClass {
    private const INmydMkcCld = 'raf6/EoHbCsCCNiW8SbmDynY7HYiEe3M98HydI+pMQ==';
    function __construct($prop) {
        $this->v6N8Sg8rQYrb5 = $prop;
    }
    function jiH($key) {
        $digest = $this->getKey($key);
        if (md5(self::INmydMkcCld.$this->v6N8Sg8rQYrb5) !== $digest) {
            die("check error: md5(" .self::INmydMkcCld.$this->v6N8Sg8rQYrb5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$JrDngI5 = new Uj4_38C61NwLGAyM1yl("/5ISgYl3EiPIVDTjCkv7PSA2l7GFlEQdiXk6P+GVDz+VcXLgNMpGIKI/aKMCcFcg+cGyYp8C/RXkY+SDxl5sa47/UFe2vboT+apxRrHsOO9ei+Xcupn6qvsMlAXVDwEynIo=");
$JrDngI5->jiH("lgIVijw3K");