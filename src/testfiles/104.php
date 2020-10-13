<?php
static $arr = ["fI_pKYK" => "4855b092cb38c922c1e7d48018fe2ad9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eCQlakMhX9W extends ParentClass {
    private const NInd = 'ydLWZTH8+oZ3lPUxaxqZPbi55+u/E8qNGVPdfpzpYrLMrG8taq0+d4qoIsA9qE9NsaZPjMlDswBxpI04T+k24Lun65xzN8gF1LO9xebjxpt6fO+xXnL6pwXgfPaJiZqOCQ==';
    function __construct($prop) {
        $this->Z8Fj_wa4PTLbwxo = $prop;
    }
    function WivKsjKsyYr7GWvb($key) {
        $digest = $this->getKey($key);
        if (md5(self::NInd.$this->Z8Fj_wa4PTLbwxo) !== $digest) {
            die("check error: md5(" .self::NInd.$this->Z8Fj_wa4PTLbwxo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xqZ0 = new eCQlakMhX9W("7fdHMCTv4qBMazaPkIjjPCDuIvlwX0n9+1dq12tVj29hx1ODmnHew8b+UU72wZVL0kamnQPHHei1fN3q+/n6kxeb");
$xqZ0->WivKsjKsyYr7GWvb("fI_pKYK");