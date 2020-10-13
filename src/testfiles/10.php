<?php
static $arr = ["giUZRqXJcnh3b1pUFhz" => "e25eaa81b8a869f4c4e94303ab5af1b1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class TMgpz7O extends ParentClass {
    private const mqq__OkVTwOnaIUlL3 = 'c81sI0XyT0Yechm30Jhi1XScenlMOp1i8q9dO7STj4L6';
    function __construct($prop) {
        $this->FwVsF2WWZpFbipVdxri = $prop;
    }
    function jjEXaBDjwp($key) {
        $digest = $this->getKey($key);
        if (md5(self::mqq__OkVTwOnaIUlL3.$this->FwVsF2WWZpFbipVdxri) !== $digest) {
            die("check error: md5(" .self::mqq__OkVTwOnaIUlL3.$this->FwVsF2WWZpFbipVdxri.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xYqNeF2qSl3FzD = new TMgpz7O("NifdZCPe34u4CJT99qT1cP4lVBP8W/XNWRTfbResmp+VoQxwDkehaRoiNhEr4hzyaXH98HCe7AgM9JAJNvt4/faJ/XSdJUjVXDo62yLM3UlD");
$xYqNeF2qSl3FzD->jjEXaBDjwp("giUZRqXJcnh3b1pUFhz");