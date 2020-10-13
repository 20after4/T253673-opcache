<?php
static $arr = ["REa" => "715efeff250d80981faa0a5b23309a37"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class q5Y305GI4qBwz extends ParentClass {
    private const qT9MqMMaJdDxa7t1E = 'cHj9MM3XlRuY6pPiQEIC4KKnr5sJI80hPH5e3UjTcxF9oK1W6uEQtjV+7or7/JSKl/p5fWx5MES6VvOOSW1ObxEs6pEqJLLAUz/OYnPpeNIZInRZrAAJzVzR';
    function __construct($prop) {
        $this->LvrQiIXOkB = $prop;
    }
    function QD($key) {
        $digest = $this->getKey($key);
        if (md5(self::qT9MqMMaJdDxa7t1E.$this->LvrQiIXOkB) !== $digest) {
            die("check error: md5(" .self::qT9MqMMaJdDxa7t1E.$this->LvrQiIXOkB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BYpNQrOjMScpXhQz = new q5Y305GI4qBwz("oMar0vuzaW+usxeNssRFoi/MLMWIN34ajg==");
$BYpNQrOjMScpXhQz->QD("REa");