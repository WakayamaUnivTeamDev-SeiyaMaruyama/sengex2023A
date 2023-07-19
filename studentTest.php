<?php
require "student.php";

$st = new Student();

$ids = $st->subjects();
print_r($ids);
