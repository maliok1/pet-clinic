<?php
require_once 'DB.php';
require_once 'DB_functions.php';

DB::connect('localhost','clinic', 'root', 'rootroot');
// DB::statement()
$data = json_decode(file_get_contents('clients.json'), true);

foreach($data as $d){
 $query = 
 "INSERT
  INTO `owners`
  (`first_name` , `surname`)
  VALUES
  (?, ?)";

  DB::insert($query, [
    $d['first_name'], 
    $d['surname']
  ]);
}

 