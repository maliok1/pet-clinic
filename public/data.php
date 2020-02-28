<?php
require_once 'DB.php';
require_once 'DB_functions.php';

DB::connect('localhost','clinic', 'root', 'rootroot');
DB::statement('TRUNCATE TABLE `owners`' );
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

  $owner_id = DB::lastInsertId();

  foreach($d['pets'] as $pet){
  $query = 
  "INSERT
   INTO `pets`
   (`owner_id`, `name`, `breed`, `age`, `weight`, `photo`)
   VALUES
   (?, ?, ?, ?, ?, ?)";
 
   DB::insert($query, [
     $owner_id,
     $pet['name'], 
     $pet['breed'],
     $pet['age'], 
     $pet['weight'], 
     $pet['photo']
   ]);
 }

}

