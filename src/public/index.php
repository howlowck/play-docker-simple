<?php
var_dump('hi!');

$db = new \PDO(
    'mysql:host=db;dbname=demoDb',
    'demoUser',
    'demoPass'
);

$count = $db->exec("INSERT INTO folks(name, addr, city) VALUES ('Batman', '1 Dark Knight Dr', 'Gotham')");
echo "$count row affected";

var_dump('done!');
