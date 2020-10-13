<?php
// Generate randomized, self-verifying PHP code.
function randomName() {
    $alpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_';
    $alphanum = $alpha . '0123456789';
    $s = $alpha[mt_rand(0, strlen($alpha)-1)];
    $len = mt_rand(1, 20);
    while(strlen($s) < $len) {
        $s .= $alphanum[mt_rand(0, strlen($alphanum)-1)];
    }
    return $s;
}

$className = randomName();
$methodName = randomName();
$arrayKey = randomName();
$constName = randomName();
$constValue = base64_encode(random_bytes(mt_rand(10, 100)));
$propName = randomName();
$propValue = base64_encode(random_bytes(mt_rand(10, 100)));
$instName = randomName();
$digest = md5($constValue.$propValue);

echo <<<EOT
<?php
static \$arr = ["{$arrayKey}" => "{$digest}"];
class ParentClass {
    protected function getKey(\$key) {
        global \$arr;
        return \$arr[\$key];
    }
}
class {$className} extends ParentClass {
    private const {$constName} = '{$constValue}';
    function __construct(\$prop) {
        \$this->{$propName} = \$prop;
    }
    function {$methodName}(\$key) {
        \$digest = \$this->getKey(\$key);
        if (md5(self::{$constName}.\$this->{$propName}) !== \$digest) {
            die("check error: md5(" .self::{$constName}.\$this->{$propName}.") != " . \$digest);
        }
        echo "OK\\n";
    }
}
\${$instName} = new {$className}("{$propValue}");
\${$instName}->{$methodName}("{$arrayKey}");
EOT;

