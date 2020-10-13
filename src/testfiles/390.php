<?php
static $arr = ["TwfNk5P" => "45f7c162c7ecb98afab4f3e8bd85ab61"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iRlCfj1kwAS3kKFUyEt extends ParentClass {
    private const Q_PGPRLBEKP = '9oOlh1eCR0VmBufaEyFoh3s8PzKMxBfyYBZKtg7PEbotIlLg7NB5BKDWOdF8aG1Q6EWdVNOdJZMomVAR';
    function __construct($prop) {
        $this->ocEFl9lfoQjc = $prop;
    }
    function S4ojT2t($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q_PGPRLBEKP.$this->ocEFl9lfoQjc) !== $digest) {
            die("check error: md5(" .self::Q_PGPRLBEKP.$this->ocEFl9lfoQjc.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Sd8ohdf6ng0j2YN = new iRlCfj1kwAS3kKFUyEt("nSF0J6zQP/kIq87fL5K7EiDrsDKXxfd+Z8rezY6QSl2lMz8PBu0H8b5y1SZmgKBawKujVhrqKefh2W7y/UtNHOjL6Nta68zotYCJ");
$Sd8ohdf6ng0j2YN->S4ojT2t("TwfNk5P");