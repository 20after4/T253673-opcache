<?php
static $arr = ["gyVTyeDojrjNfx" => "d933d3f33649b557dea8b8790bfd7f96"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class AJpGN_PjYJX extends ParentClass {
    private const GaAjFhC6R = 'UUev5+mVfvT1pcgNE6iyt59x65YvnVwOp/vGsfWmEwW8ft7V9cCbVJxwRRhCtJHy3QSz';
    function __construct($prop) {
        $this->vH0XCZCiuW = $prop;
    }
    function w4xUsrz1UI1LGT($key) {
        $digest = $this->getKey($key);
        if (md5(self::GaAjFhC6R.$this->vH0XCZCiuW) !== $digest) {
            die("check error: md5(" .self::GaAjFhC6R.$this->vH0XCZCiuW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GLuUYmEUkCGeG = new AJpGN_PjYJX("T514GnolZxXF3OdK2SR5mLjL4X7qAVOWpAtCbfE6MxyL2zDAuU3ap7qqVJwT3FZZ1st6wI4IhbE7zx1HzjruvYZTTu5annv6/VCESv0h0WatYCYiY4g5e/lRFBI=");
$GLuUYmEUkCGeG->w4xUsrz1UI1LGT("gyVTyeDojrjNfx");