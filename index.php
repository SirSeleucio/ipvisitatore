<?php
$host = "HOST_DB";
$user = "UTENTE_DB";
$password = "PASS_DB";
$db = "NOME_DB";

$obj = new mysqli($host, $user, $password, $db);

//INSERIMENTO

if (mysqli_connect_errno()) {
   printf("Connect failed: %­s\n", mysqli_connect_error());
   exit();
}

$ip = getenv("REMOTE_ADDR");
$SQL = sprintf("INSERT INTO IPVisitatore (ip)
values('$ip')");
$result = $obj->query($SQL);

if($result) {
echo "Ok IP Salvato";
} else {
echo "Errore nella Query";
}
?>
