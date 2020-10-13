<?php
static $arr = ["u6BW37iez8Ctm" => "9ad26b52c60c9c6d64fbe46c90a3f24c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cRnJShINpeQt1OU extends ParentClass {
    private const aOAt = 'fs8hpz1dsqI+11d1kBAkZjnndkwyEZvdDl98If5/EaEmEqhDE9hHUMRzS0TiZLmQXEwpb4CtpczFzSo9hDf7y2us2noIWC0wkiZw9KKr62EhsjWqJNgrG3SoyY/bJpff';
    function __construct($prop) {
        $this->UPHyc7 = $prop;
    }
    function UQZ_QWTRKZjrw($key) {
        $digest = $this->getKey($key);
        if (md5(self::aOAt.$this->UPHyc7) !== $digest) {
            die("check error: md5(" .self::aOAt.$this->UPHyc7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$YHT = new cRnJShINpeQt1OU("GfxQn1OisPLc+UwNT4w5rhK+KbOTVLkBp2H+Is19eYLW2c/+/i+cXyvqqWIu/Gf4r5bDsFK/c0pVagKBnyMNiVXR5nT/S6mtEGLk/7pFpCWAbPEwP8Bjh7M=");
$YHT->UQZ_QWTRKZjrw("u6BW37iez8Ctm");