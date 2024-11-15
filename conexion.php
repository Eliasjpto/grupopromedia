<?php 
# Conectamos a la base de datos
$host='pictoapp_mysql_db';
$dbname='my_database';
$usuario='user';
$pass='abc123.';

try {

  # $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

  $pdo=new PDO("mysql:host=$host;dbname=$dbname",$usuario,$pass);

  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo "Se ha producido un error al intentar conectar al servidor MySQL: ".$e->getMessage();
}