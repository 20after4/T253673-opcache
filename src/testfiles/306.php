<?php
static $arr = ["AzfzJeumq7" => "3da0ece6029f86f65195b81af55cba8f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class EucT9C41HAh7RtrTr2F extends ParentClass {
    private const nwwXt7H0snOMi = 'lDa3zib6TrMtWTCLKzOJbTDlTVKZij3nd0/iCPgVvowctxgRBwNc96js0s5QOfqxgUjrSkBZSCqdtr+5Xo/dcw+DbjN9MUZ9qMLowBlUqS8Z8mISa+iq';
    function __construct($prop) {
        $this->jJ = $prop;
    }
    function ZDc0a_($key) {
        $digest = $this->getKey($key);
        if (md5(self::nwwXt7H0snOMi.$this->jJ) !== $digest) {
            die("check error: md5(" .self::nwwXt7H0snOMi.$this->jJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jKIoHhhq6XF9cJM = new EucT9C41HAh7RtrTr2F("spBMr+UORJboSU5oL0FHBsyPER5+nNidL40ZHeQCMLzXoOPJLITM/lFR9Vzngl7DH7dH2UE/JMdOaszNzQHHlSmbZoxnpTURTtfQibEaEIyvYIj2Gl70");
$jKIoHhhq6XF9cJM->ZDc0a_("AzfzJeumq7");