<?php
session_start();
if (isset($_POST['name'])) { 
    $name = $_POST['name'];
} 
$name = trim($name);
if ($name =='') { unset($name);} 
if (empty($name))
    {
      $_SESSION['error'] = "Ви ввели некоректне ім'я";
      exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=/index.php'></head></html>");

    }
else{
    require 'connect.php';
    $result = $conn->query("CALL update_user_name({$_SESSION['id_user']}, '{$name}')");
    if(!$result)
     {
         $_SESSION['error'] = "Зміна імені не вдалася";
     }   
     else
     {
         unset($_SESSION['error']);
         $_SESSION['name'] = $name;
     }
}
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=/index.php'></head></html>");
?>