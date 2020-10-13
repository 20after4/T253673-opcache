<?php
static $arr = ["LBrjQlsMS4" => "3b883f3abf937cfbdc58ed21e55027cf"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rnLz7KlnzoCtQ4mwYUTz extends ParentClass {
    private const jwYUgqPcxqUpkQ8D = 'KOmGpr6OXLKpwOeRYgadQXmursZVwbNN2UiN2cDbkCzPRRZkxjfLO0wDJ5WjP0CUpPwhk7C3whqAnI2xc22Fm0Dhje6s3VzwDyqIVWUS49SAlnxqQEW+sVnwxR8=';
    function __construct($prop) {
        $this->oIa5C5Jt64d4rFUMA6q = $prop;
    }
    function r($key) {
        $digest = $this->getKey($key);
        if (md5(self::jwYUgqPcxqUpkQ8D.$this->oIa5C5Jt64d4rFUMA6q) !== $digest) {
            die("check error: md5(" .self::jwYUgqPcxqUpkQ8D.$this->oIa5C5Jt64d4rFUMA6q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kjm9wAKu = new rnLz7KlnzoCtQ4mwYUTz("mfJUD27tX9LVEhYV55H32hrDIa4yfFIY9PRv+S6g1UwzRGBFbGQp9osxtFCrCyniKdoZYA==");
$kjm9wAKu->r("LBrjQlsMS4");