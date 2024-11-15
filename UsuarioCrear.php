<?php
try {
  //conexion
  include("conexion.php");

  //captar las variables form

  $nombre = $_POST['Nombres'];
  $emails = $_POST['Emails'];
  $telf = $_POST['Telf'];
  $asuntos = $_POST['Asuntos'];
  $comentarios= $_POST['Comentarios'];

 // $data= $_POST['data'];

  



  if (!empty($nombre) && !empty($emails)  && !empty($comentarios)) {
    # $stmt sería un objeto de tipo PDOStatement (consulta preparada)
    $stmt = $pdo->prepare("INSERT INTO usuarios( nombre, email, telf, asunto,comentarios) values ( :nombre, :emails,:telf, :asuntos, :comentarios)");
    # Ejecutamos la consulta con ->execute() método del objeto PDOStatement
# Este método devuelve true o false.

    $stmt->execute([
     "nombre" => $nombre,
      "emails" => $emails,
     "telf" =>  $telf,
     "asuntos" =>$asuntos,
     "comentarios" =>$comentarios


   ]);


}
} catch (PDOException $e) {
 echo "Error: " . $e->getMessage();
}



$stmt = null;

