<?php
static $arr = ["BqeJyR2bZkWYz6Se" => "0b13b422fe526d131869f804410bf29e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qBTyudfJxpXTUi extends ParentClass {
    private const sQVAdgAKmufpAo0LM = 'jxp5J3Zb8KqndFMZ1PWRPPAAsWhkOfFSGTUbTXAv4YVlYbY4lgIBcQW3NkqhQNNyI4F3F2py6zSBUY1AIJFrxZssu+CMxKiOTbzVhHvQOTycHQT0WGeKFz9txZfJlOrxyFc=';
    function __construct($prop) {
        $this->Fbz0oZoSiqsZM8m = $prop;
    }
    function yT2QQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::sQVAdgAKmufpAo0LM.$this->Fbz0oZoSiqsZM8m) !== $digest) {
            die("check error: md5(" .self::sQVAdgAKmufpAo0LM.$this->Fbz0oZoSiqsZM8m.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CoGDsUROXRmdpvl = new qBTyudfJxpXTUi("9Zjgq598ao42Ovly3MuAWeGjU+zKRGRyLmdr8dHQsSFM3DGtbqs2ZaHB5IoJaurLUl5IhgPTnJ0b6/7fWU7JNrYgEWE4h2txPg==");
$CoGDsUROXRmdpvl->yT2QQ("BqeJyR2bZkWYz6Se");