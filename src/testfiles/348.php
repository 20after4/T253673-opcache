<?php
static $arr = ["Eoabi9J" => "6a2890a6f7623dbc47c1ef28c9eaad12"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XaJ extends ParentClass {
    private const qU1G0kpOn2nR355lG = 'DosXPUQCsW8VDNOetLUkCZj0AekGlSRwzcKuVEsiJaIbBjiFp3cZaP3EgIPkqjhz/Vp9zgEjMmdI119tpuEXAKp/vv/duWU=';
    function __construct($prop) {
        $this->WwMHj4r2ReRDz0 = $prop;
    }
    function c($key) {
        $digest = $this->getKey($key);
        if (md5(self::qU1G0kpOn2nR355lG.$this->WwMHj4r2ReRDz0) !== $digest) {
            die("check error: md5(" .self::qU1G0kpOn2nR355lG.$this->WwMHj4r2ReRDz0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xuBLs_GLvPPSsJALdv = new XaJ("nailZ6PGMRTYP8zm2NgiTFWESXwOmPM5pM5qbExG2pZ5wR8s/ec8s4mXhuHIhTp6uQ4=");
$xuBLs_GLvPPSsJALdv->c("Eoabi9J");