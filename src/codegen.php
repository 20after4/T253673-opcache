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

// Returns a string
function generatePhp() {
$className = randomName();
$methodName = randomName();
$arrayKey = randomName();
$constName = randomName();
$constValue = base64_encode(random_bytes(mt_rand(10, 100)));
$propName = randomName();
$propValue = base64_encode(random_bytes(mt_rand(10, 100)));
$instName = randomName();
$digest = md5($constValue.$propValue);

return <<<EOT
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
           \$f = fopen("/tmp/digest-fail.log", "a");
           if (\$f) {
              fwrite(\$f, "Digest check failed in ".__FILE__."\n");
              fclose(\$f);
           }
           throw new Exception("check error: md5(" .self::{$constName}.\$this->{$propName}.") != " . \$digest);
           #  die("check error: md5(" .self::{$constName}.\$this->{$propName}.") != " . \$digest);
        }
        echo "OK\\n";
    }
}
\${$instName} = new {$className}("{$propValue}");
\${$instName}->{$methodName}("{$arrayKey}");
EOT;
}

// Change argc to a more intuitive value
$argc--;

if ($argc === 2) {
    // codegen.php start-file-id end-file-id(inclusive)
    // generates __DIR__/testfiles/<id>.php files 
    $from = intval($argv[1]);
    $to = intval($argv[2]); // inclusive

    for ($i=$from; $i<=$to; $i++) {
        $fn = __DIR__."/testfiles/" . $i . ".php";
        $tmpfn = $fn . ".tmp";
        
        $f = fopen($tmpfn, "w");
        if ($f == false) {
            echo("fopen(".$tmpfn.") failed");
            break;
        }
        fwrite($f, generatePhp());
        fclose($f);
        rename($tmpfn, $fn);
    }
} else {
    // Write a php file to stdout
    echo generatePhp();
}
        
    

