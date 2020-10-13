<?php
static $arr = ["cJ5SRIlJb8_qC" => "1dea6fe0ee205e3733106cf7d0303ead"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _yD extends ParentClass {
    private const UFDvS7VV = 'JsF1dnTmvb5EOjq5AZL/f9/i5hCHgXniuGPQOzjeMCmXJWwvozNNKaeFGu/3WjIqN5wfGbO1j6Y=';
    function __construct($prop) {
        $this->td = $prop;
    }
    function TQg6CMi2zh($key) {
        $digest = $this->getKey($key);
        if (md5(self::UFDvS7VV.$this->td) !== $digest) {
            die("check error: md5(" .self::UFDvS7VV.$this->td.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jcXlqgUJ2QWvRg = new _yD("/nhw2rSRY+zTsz8nhmXAjEsIK0WkGA1rmqFuKdhaeJKwDfSGZwhLMpbIbYDCqRJvpLqLJPCVLia3B95w6TzH0WII9VZxLsaPlfUIaSWWVlZKZASkG7bVxIPTLI3f");
$jcXlqgUJ2QWvRg->TQg6CMi2zh("cJ5SRIlJb8_qC");