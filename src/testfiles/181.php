<?php
static $arr = ["Ge" => "6ecc1ed730da31cda5e43a7cef602dbc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WsuhSGp extends ParentClass {
    private const cUq53NUZK = 'YJaSuHLkT0c+cFJzbuV/VPNLnYXkcgYweB36NhOn1vMAVQWl7102QjDFmMZ7NGsFW0071Er+nikb6lBVivLLSv+aEQE=';
    function __construct($prop) {
        $this->ODSjTq80riYSGqkqh6D = $prop;
    }
    function IPUHvk($key) {
        $digest = $this->getKey($key);
        if (md5(self::cUq53NUZK.$this->ODSjTq80riYSGqkqh6D) !== $digest) {
            die("check error: md5(" .self::cUq53NUZK.$this->ODSjTq80riYSGqkqh6D.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OOrBWxoiELIzwa = new WsuhSGp("gH4zzXMNXzsXjsdo/RvDfzBRH9OGofTgSp9tyxc7epP+BL2QmwR4AjFe/6hsVDBTKe9/D44Los2vHTGzpHfhtKOA8FT9FM9NHWc=");
$OOrBWxoiELIzwa->IPUHvk("Ge");