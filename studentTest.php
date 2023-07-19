<?php
require "student.php";

$st = new Student();

$ids = $st->subjects();
foreach($ids as $value) {
    echo $ids;
    echo "\n";
}
