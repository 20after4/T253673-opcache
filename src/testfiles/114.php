<?php
static $arr = ["a" => "70b2ba4523a7f1aa7998ebe05ae32d98"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class O extends ParentClass {
    private const bu39qMxtrSBN_3Ymm8j = 'fM75VCLMPDztd0O/E0wbhHI2XtLZ+qOSOxBdvIoUh4DfkAnI4Q0GXfPz6Sy8gujmfu6IqSewXQ==';
    function __construct($prop) {
        $this->gAiBfKiA9l9Fc = $prop;
    }
    function oWOET($key) {
        $digest = $this->getKey($key);
        if (md5(self::bu39qMxtrSBN_3Ymm8j.$this->gAiBfKiA9l9Fc) !== $digest) {
            die("check error: md5(" .self::bu39qMxtrSBN_3Ymm8j.$this->gAiBfKiA9l9Fc.") != " . $digest);
        }
        echo "OK\n";
    }
}
$SEshVO2KYwKUAA0SDmzN = new O("o+WqkyDqZlG6SP8ewp84p/OXbH1mfpP314o0L2MYFugFfcIpcXZGBIjUTAK0ffTOc52wnNyJs/DlcpR/fRMAtE7jctKCtT4=");
$SEshVO2KYwKUAA0SDmzN->oWOET("a");