<?php
static $arr = ["ZHP" => "c0247270c3a5d38a5dfba46b78f8a36c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qACMagkxmPOz087 extends ParentClass {
    private const UilickQ56 = 'Gc00fEvvlQAeSJlTi8U8PJ/79AkGYIgKNv1+jLw8dwjo+BQ7hR3uwiNf9wSSfO18ykWbEbzQEApal8XVhYDp';
    function __construct($prop) {
        $this->qZchaKdG = $prop;
    }
    function Z3xQcyPXG_wYJDJsaW5P($key) {
        $digest = $this->getKey($key);
        if (md5(self::UilickQ56.$this->qZchaKdG) !== $digest) {
            die("check error: md5(" .self::UilickQ56.$this->qZchaKdG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cm9lH8DK5hYeSXhMNmB = new qACMagkxmPOz087("Sgo7HbAqLkMgGjuLuV9u3smqd0Bb4N4kHyDa5s0S4eijYhGX9PS6YjmbtZa3NvOu7g==");
$cm9lH8DK5hYeSXhMNmB->Z3xQcyPXG_wYJDJsaW5P("ZHP");