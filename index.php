<?php
session_start(); // начало сессии: если сессии еще нет 
// (не пришел Cookie "PHPSESSID" или нет файла сессии, 
//  соответствующего значению cookie "PHPSESSID"), то:
//  1) генерируется уникальный идентификатор сессии;
//  2) устанавливается Cookie "PHPSESSID" со значением этого идентификатора
//  3) создается файл сессии с соответствующим идентификатору именем
//  4) инициализируется суперглобальный массив $_SESSION, который проецируется на файл сессии
//--- конфигурационные параметры ---
include 'config.php';
$pdo=  connect();
$pdo->query("SET CHARACTER SET utf8"); // установка кодировки символов для текущего соединения с MySQL Server
require_once 'structure/auth.php';
?>
<?php include "structure/Header.php" ?>
            <div class="col2" id="cont">
<?php include "structure/home.php"; ?>
            </div>

<?php include "structure/Menu.php" ?>