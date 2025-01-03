<?php phpinfo(); ?>

<?php
// This is a comment
$name = "Tom";
$age = 20;
$IsStudent = true;
echo $name;
echo $age;
echo $IsStudent;

// ifとかforとか
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
    echo $value;
}

// 関数
function add($a, $b) {
    return $a + $b;
}
echo add(1, 2);

// 配列
$array = array(1, 2, 3, 4, 5);
$array[] = 6;
echo $array[5];

// クラス
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function show() {
        echo $this->name;
        echo $this->age;
    }
}

$preson1 = new Person("Tom", 20);
$preson1->show();
?>