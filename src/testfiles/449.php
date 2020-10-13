<?php
static $arr = ["vFqvVUO7wUSZ5eOOko" => "2114704325789bc0c6dcfdf4f50c4962"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hh extends ParentClass {
    private const xim7cxw09W = 'QHO1CeJ7fhaI1AJCwb3mKytdJAS1m68asXBvKobLavxfdFhKCPPrABqG7sD3t7ZCYXNrksswddzsCeB52iFrpMrZ6rfRzgd1ZhHNYmBOD+hl';
    function __construct($prop) {
        $this->ivy = $prop;
    }
    function g5iRyfnS($key) {
        $digest = $this->getKey($key);
        if (md5(self::xim7cxw09W.$this->ivy) !== $digest) {
            die("check error: md5(" .self::xim7cxw09W.$this->ivy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yFPV_ = new hh("js8Hbn1aGL2XEVGkwlZyn0d3egsfrcVUgz3fgIFp/BUsLyAAyxXgGyAi4OyjUj0QSWof1c5VzVZaEMNKv3aWF+O9lFGv4ZsjS+1Dakw3XWcQLhJA4rOFOg7ZkRs=");
$yFPV_->g5iRyfnS("vFqvVUO7wUSZ5eOOko");